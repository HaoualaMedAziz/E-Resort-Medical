<?php

namespace App\Controller\Admin;

use App\Entity\Visite;
use DateTime;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;


class VisiteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Visite::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            DateTimeField::new('dateVisite'),
            TextEditorField::new('description'),
            AssociationField::new('membreFamille'),



        ];
    }
    
}
