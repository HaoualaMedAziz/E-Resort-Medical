<?php

namespace App\Controller\Admin;

use App\Entity\MembreFamille;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use Symfony\Component\Form\Extension\Core\Type\{PasswordType, RepeatedType};
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;


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
        TextField::new('password')
            ->setFormType(RepeatedType::class)
            ->setFormTypeOptions([
            'type' => PasswordType::class,
            'first_options' => [
            'label' => 'Password',
            'hash_property_path' => 'password',
             ],
            'second_options' => ['label' => '(Repeat)'],
            'mapped' => false,
            ])
            ->setRequired($pageName === Crud::PAGE_NEW),
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