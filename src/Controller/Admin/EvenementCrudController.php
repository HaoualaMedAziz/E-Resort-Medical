<?php

namespace App\Controller\Admin;

use App\Entity\Evenement;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EvenementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Evenement::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('resident'),
            AssociationField::new('typeEvenement'),
            TextareaField::new('description'),
            DateTimeField::new('dateEvenement'),
            
        ];
    }
    
}
