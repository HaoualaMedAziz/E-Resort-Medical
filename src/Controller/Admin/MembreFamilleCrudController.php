<?php

namespace App\Controller\Admin;

use App\Entity\MembreFamille;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;



class MembreFamilleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MembreFamille::class;
    }

    
   public function configureFields(string $pageName): iterable
{
    return [
        TextField::new('email')->setLabel('Adresse email'),
        TextField::new('password')->setLabel('Mot de passe'),
        TextField::new('lastName')->setLabel('Nom de famille'),
        TextField::new('firstName')->setLabel('Prénom'),
        TextField::new('Telephone')->setLabel('Téléphone'),
        TextField::new('address')->setLabel('Adresse'),
        TextField::new('zipCode')->setLabel('Code postal'),
        TextField::new('city')->setLabel('Ville'),
        TextField::new('numPassport')->setLabel('Numéro de passeport'),
        AssociationField::new('resident')->setLabel('Résident'),
        AssociationField::new('visites')->setLabel('Visites'),
    ];
}
}