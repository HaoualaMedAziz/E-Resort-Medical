<?php

namespace App\Controller\Admin;

use App\Entity\DossierMedical;
use App\Entity\Evenement;
use App\Entity\Infirmier;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\MembreFamille;
use App\Entity\Observation;
use App\Entity\Resident;
use App\Entity\Soignant;
use App\Entity\TypeEvenement;
use App\Entity\User;
use App\Entity\Visite;

class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator)
    {
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator->setController(UserCrudController::class)->generateUrl();
        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()->setTitle('E Resort Medical');
    }
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Infirmiers', 'fas fa-user-nurse', Infirmier::class);
        yield MenuItem::linkToCrud('Aides-Soignants', 'fas fa-user-nurse', Soignant::class);
        yield MenuItem::linkToCrud('Membres de famille', 'fas fa-user-friends', MembreFamille::class); 
        yield MenuItem::linkToCrud('Résidents', 'far fa-address-card', Resident::class);
        yield MenuItem::linkToCrud('Tous les utilisateurs', 'fa-solid fa-users', User::class);
        yield MenuItem::linkToCrud('Les dossiers médicaux', 'fas fa-notes-medical', DossierMedical::class);
        yield MenuItem::linkToCrud('Visites', 'fas fa-people-arrows', Visite::class);
        yield MenuItem::linkToCrud('Observations', 'fa-solid fa-pen-to-square', Observation::class);
        yield MenuItem::linkToCrud('Les types d\'événements', 'fa-solid fa-list', TypeEvenement::class);
        yield MenuItem::linkToCrud('Les évenements', 'fa-solid fa-calendar-day', Evenement::class);


    }   
    
}
