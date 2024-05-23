<?php

namespace App\Controller\Admin;

use App\Entity\Resident;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use Symfony\Component\Form\Extension\Core\Type\{PasswordType, RepeatedType};
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;


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
            TextField::new('lastName'),
            TextField::new('firstName'),
            TextField::new('Telephone'),
            TextField::new('address'),
            TextField::new('zipCode'),
            TextField::new('city'),
            TextField::new('nbChambre'),
            AssociationField::new('membreFamille'),
            AssociationField::new('observations'),
            AssociationField::new('agenda')
            ->setFormTypeOptions([
            'choice_label' => 'typeEvenement',
            
        
        ]),

            
            

            



            ];
    }
    
}
