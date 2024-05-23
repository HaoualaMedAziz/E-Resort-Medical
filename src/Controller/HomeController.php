<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\Repository\ResidentRepository;
use App\Repository\UserRepository;
use App\Repository\ObservationRepository;
use App\Repository\EvenementRepository;
use App\Entity\Evenement;
use App\Entity\MembreFamille;
use App\Entity\Resident;
use App\Entity\User;




class HomeController extends AbstractController
{
    //#[IsGranted('ROLE_RESIDENT')]
    #[Route('/home', name: 'app_home')]
    public function index(ResidentRepository $residentRepository): Response
    {
        dump($this->getUser());
        $user = $this->getUser();
        
        if ($user && \in_array('INFIRMIER', $user->getRoles(), true)) {
        // Si l'utilisateur a le rôle INFIRMIER, redirige vers une autre page
        return $this->redirectToRoute('app_home_infirmier');
    }
    if ($user && \in_array('RESIDENT', $user->getRoles(), true)) {
        // Si l'utilisateur a le rôle Resident, redirige vers une autre page
        return $this->redirectToRoute('app_home_resident');
    }

    if ($user && \in_array('MFAMILLE', $user->getRoles(), true)) {
        // Si l'utilisateur a le rôle Resident, redirige vers une autre page
        return $this->redirectToRoute('app_home_famille');
    }
    if ($user && \in_array('SOIGNANT', $user->getRoles(), true)) {
        // Si l'utilisateur a le rôle Resident, redirige vers une autre page
        return $this->redirectToRoute('app_home_soignant');
    }       
        return $this->render('home/index.html.twig');
    }

    
    #[Route('/home/infirmier', name: 'app_home_infirmier')]
    public function index2(ResidentRepository $residentRepository, ObservationRepository $observationRepository, EvenementRepository $evenementRepository): Response
    {
        dump($this->getUser());
        $user = $this->getUser();
       if ($user && \in_array('RESIDENT', $user->getRoles(), true)) {
        //return $this->redirectToRoute('app_login');
        // Si l'utilisateur a le rôle RESIDENT, redirige vers le login avec un message d'erreur
        throw new AccessDeniedException('Vous n\'avez pas la permission d\'accéder à cette page.');
    }
        return $this->render('home/infirmier.html.twig', [
            'residents' => $residentRepository->findAll(),
        ]);
    }

    #[Route('/home/soignant', name: 'app_home_soignant')]
    public function index0(ResidentRepository $residentRepository): Response
  {
    return $this->render('home/soignant.html.twig', [
            'residents' => $residentRepository->findAll(),
        ]);

  }


    #[Route('/home/resident', name: 'app_home_resident', methods: ['GET'])]
       public function index3(): Response
  {
    // Récupérer l'utilisateur actuel
    dump($this->getUser());
    $resident = $this->getUser();
    if ($resident instanceof User) {
        $resident->getId();
         return $this->render('home/resident.html.twig',[
                'resident' => $resident
            ]);
        }

    return $this->render('home/resident.html.twig');
  }

    #[Route('/home/famille', name: 'app_home_famille', methods: ['GET'])]
    public function index4(): Response
    {
        // Obtenez l'utilisateur actuellement authentifié
        /** @var MembreFamille|null $user */
        $user = $this->getUser();

        // Vérifiez si l'utilisateur est connecté et est un MembreFamille
        if (!$user instanceof MembreFamille) {
            throw $this->createAccessDeniedException('Vous devez être connecté en tant que membre de la famille.');
        }

        // Obtenez le résident associé à ce membre de la famille
        $resident = $user->getResident();

        // Vérifiez si le résident existe
        if (!$resident) {
            throw $this->createNotFoundException('Aucun résident associé à ce membre de la famille.');
        }

        // Effectuez d'autres opérations avec $resident si nécessaire

        return $this->render('home/famille.html.twig', [
            'resident' => $resident,
        ]);
    }


    
}
