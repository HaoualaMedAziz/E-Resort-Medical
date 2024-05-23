<?php

namespace App\Controller;

use App\Entity\Infirmier;
use App\Entity\MembreFamille;
use App\Entity\Resident;
use App\Form\RegistrationResidentFormType;
use App\Form\RegistrationMFamilleFormType;
use App\Form\RegistrationInfirmierFormType;
use App\Security\ResidentAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register_resident', name: 'app_register_resident')]
    public function registerResident(Request $request, UserPasswordHasherInterface $userPasswordHasher, Security $security, EntityManagerInterface $entityManager): Response
    {
        $resident = new Resident();
        $form = $this->createForm(RegistrationResidentFormType::class, $resident);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $resident->setPassword(
                $userPasswordHasher->hashPassword(
                    $resident,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($resident);
            $entityManager->flush();

            // do anything else you need here, like send an email

            return $security->login($resident, ResidentAuthenticator::class, 'main');
        }

        return $this->render('registration/register_Resident.html.twig', [
            'registrationResidentForm' => $form,
        ]);
    }

                                    //Register membre de famille

        
        #[Route('/register_mFamille', name: 'app_register_mFamille')]
    public function registerMFamille(Request $request, UserPasswordHasherInterface $userPasswordHasher, Security $security, EntityManagerInterface $entityManager): Response
    {
        $membreFamille = new MembreFamille();
        $form = $this->createForm(RegistrationMFamilleFormType::class, $membreFamille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $membreFamille->setPassword(
                $userPasswordHasher->hashPassword(
                    $membreFamille,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($membreFamille);
            $entityManager->flush();

            // do anything else you need here, like send an email

            return $security->login($membreFamille, ResidentAuthenticator::class, 'main');
        }

        return $this->render('registration/register_mFamille.html.twig', [
            'registrationMFamilleForm' => $form,
        ]);
    }



                                        //Register Infirmiers

        
        #[Route('/register_infirmier', name: 'app_register_infirmier')]
    public function registerInfirlier(Request $request, UserPasswordHasherInterface $userPasswordHasher, Security $security, EntityManagerInterface $entityManager): Response
    {
        $infirmier = new Infirmier();
        $form = $this->createForm(RegistrationInfirmierFormType::class, $infirmier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $infirmier->setPassword(
                $userPasswordHasher->hashPassword(
                    $infirmier,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($infirmier);
            $entityManager->flush();

            // do anything else you need here, like send an email

            return $security->login($infirmier, ResidentAuthenticator::class, 'main');
        }

        return $this->render('registration/register_infirmier.html.twig', [
            'registrationInfirmierForm' => $form,
        ]);
    }


}
