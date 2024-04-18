<?php

namespace App\Controller\Admin;

use App\Entity\Resident;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ResidentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Resident::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('email'),
            TextField::new('password'),
            TextField::new('lastName'),
            TextField::new('firstName'),
            TextField::new('Telephone'),
            TextField::new('address'),
            TextField::new('zipCode'),
            TextField::new('city'),
            TextField::new('nbChambre'),
            AssociationField::new('membreFamille'),
            AssociationField::new('observations'),

            
            
            
        ];
    }
    
}
