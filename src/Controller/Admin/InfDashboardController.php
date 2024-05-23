<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\MembreFamille;
use App\Entity\Observation;
use App\Entity\Resident;
use App\Entity\User;
use App\Entity\Visite;

class InfDashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator)
    {
    }

    #[Route('/admin2', name: 'admin2')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator->setController(UserCrudController::class)->generateUrl();
        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()->setTitle('E Resort Medical -Interface des infirmiers responsables');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Membres de famille', 'fas fa-user-friends', MembreFamille::class); 
        yield MenuItem::linkToCrud('Résidents', 'far fa-address-card', Resident::class);
        //yield MenuItem::linkToCrud('Utilisateurs', 'fa-solid fa-users', User::class);
        yield MenuItem::linkToCrud('Visites', 'fas fa-people-arrows', Visite::class);
        yield MenuItem::linkToCrud('Observations', 'fa-solid fa-pen-to-square', Observation::class);

    }   
}
