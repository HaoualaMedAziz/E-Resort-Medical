<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ResidentRepository;


class AgendaConrollerController extends AbstractController
{
    #[Route('/agenda', name: 'app_agenda')]
    public function index(ResidentRepository $residentRepository): Response
    {
        return $this->render('agenda/index.html.twig', [
            'residents' => $residentRepository->findAll(),
        ]);
    }
}
