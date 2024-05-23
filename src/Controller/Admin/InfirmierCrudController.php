<?php

namespace App\Controller\Admin;

use App\Entity\Infirmier;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;

use Symfony\Component\Form\Extension\Core\Type\{PasswordType, RepeatedType};
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class InfirmierCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Infirmier::class;
    }

     public function configureFields(string $pageName): iterable
    {
        return [ 
            TextField::new('email'),
            ArrayField::new('roles'),
            TextField::new('password')->hideOnIndex()
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
            ChoiceField::new('genre')->setChoices([
                'Male' => 'Male',
                'Female' => 'Female',
            ])->allowMultipleChoices(false),
        
              
        ];
    }
}
