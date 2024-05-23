<?php

namespace App\Controller;

use App\Entity\Infirmier;
use App\Form\InfirmierType;
use App\Repository\InfirmierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/infirmier')]
class InfirmierController extends AbstractController
{
    #[Route('/', name: 'app_infirmier_index', methods: ['GET'])]
    public function index(InfirmierRepository $infirmierRepository): Response
    {
        return $this->render('infirmier/index.html.twig', [
            'infirmiers' => $infirmierRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_infirmier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $infirmier = new Infirmier();
        $form = $this->createForm(InfirmierType::class, $infirmier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($infirmier);
            $entityManager->flush();

            return $this->redirectToRoute('app_infirmier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('infirmier/new.html.twig', [
            'infirmier' => $infirmier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_infirmier_show', methods: ['GET'])]
    public function show(Infirmier $infirmier): Response
    {
        return $this->render('infirmier/show.html.twig', [
            'infirmier' => $infirmier,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_infirmier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Infirmier $infirmier, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(InfirmierType::class, $infirmier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_infirmier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('infirmier/edit.html.twig', [
            'infirmier' => $infirmier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_infirmier_delete', methods: ['POST'])]
    public function delete(Request $request, Infirmier $infirmier, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$infirmier->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($infirmier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_infirmier_index', [], Response::HTTP_SEE_OTHER);
    }
}
