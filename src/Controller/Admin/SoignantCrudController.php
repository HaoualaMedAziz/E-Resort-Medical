<?php

namespace App\Controller\Admin;

use App\Entity\Soignant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;

use Symfony\Component\Form\Extension\Core\Type\{PasswordType, RepeatedType};
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class SoignantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Soignant::class;
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
            TextField::new('deuxiemeTelephone'),

        ];
    }
    
}
