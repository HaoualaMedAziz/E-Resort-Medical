<?php

namespace App\Controller;

use App\Entity\Resident;
use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Form\AgendaType;
use App\Form\ResidentType;
use App\Repository\ResidentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/resident')]
class ResidentController extends AbstractController
{
    #[Route('/', name: 'app_resident_index', methods: ['GET'])]
    public function index(ResidentRepository $residentRepository): Response
    {
        return $this->render('resident/index.html.twig', [
            'residents' => $residentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_resident_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $resident = new Resident();
        $form = $this->createForm(ResidentType::class, $resident);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($resident);
            $entityManager->flush();

            return $this->redirectToRoute('app_resident_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('resident/new.html.twig', [
            'resident' => $resident,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_resident_show', methods: ['GET'])]
    public function show(Resident $resident): Response
    {
        return $this->render('resident/show.html.twig', [
            'resident' => $resident,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_resident_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Resident $resident, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ResidentType::class, $resident);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_resident_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('resident/edit.html.twig', [
            'resident' => $resident,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_resident_delete', methods: ['POST'])]
    public function delete(Request $request, Resident $resident, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$resident->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($resident);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_resident_index', [], Response::HTTP_SEE_OTHER);
    }

    // les evenements d'un résident

    #[Route('/{id}/evenements', name: 'app_evenements_resident', methods: ['GET'])]
    public function evenementsResident(Resident $resident): Response
    {
        // Récupérer la collection d'événements associés au résident
        $evenements = $resident->getAgenda();
        // Vous pouvez également utiliser le repository pour obtenir les événements si nécessaire
        // $evenements = $evenementRepository->findByResident($resident);
        return $this->render('resident/resident_evenements.html.twig', [
            'resident' => $resident,
            'evenements' => $evenements,
        ]);
    }

    // le dossier médical d'un résident

    #[Route('/{id}/dossiermedical', name: 'app_dossier_medical_resident', methods: ['GET'])]
    public function dossmedResident(Resident $resident): Response
    {
        $dossiermedical= $resident->getdossiermedical();
        return $this->render('resident/resident_dossiermedical.html.twig', [
            'resident' => $resident,
            'dossier_medical' => $dossiermedical,
        ]);
    }
    
    //fonction d'ajout d'un evenement dans l'agenda 

    #[Route('/{id}/add-evenement', name: 'app_resident_add_evenement', methods: ['GET', 'POST'])]
public function addEvenement(Request $request, Resident $resident, EntityManagerInterface $entityManager): Response
{
    $evenement = new Evenement();
    $form = $this->createForm(AgendaType::class, $evenement);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Associer l'événement au résident
        $resident->addAgenda($evenement);
        
        $entityManager->persist($evenement);
        $entityManager->flush();

        return $this->redirectToRoute('app_evenements_resident', ['id' => $resident->getId()], Response::HTTP_SEE_OTHER);
    }

    return $this->render('resident/add_evenement.html.twig', [
        'resident' => $resident,
        'form' => $form->createView(),
    ]);
}
    // Modification de l'agenda

#[Route('/{id}/observations', name: 'app_observations_resident', methods: ['GET'])]
    public function observationsResident(Resident $resident): Response
    {
        $observations = $resident->getObservations();
        return $this->render('resident/resident_observations.html.twig', [
            'resident' => $resident,
            'observations' => $observations,
        ]);
    }    


  

}
