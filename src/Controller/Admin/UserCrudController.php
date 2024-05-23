<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, EmailField, TextField,ArrayField};
use Symfony\Component\Form\Extension\Core\Type\{PasswordType, RepeatedType};
use Symfony\Component\Form\{FormBuilderInterface, FormEvent, FormEvents};

class UserCrudController extends AbstractCrudController
{
    public function __construct(
        public UserPasswordHasherInterface $userPasswordHasher
    ) {}
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            EmailField::new('email'),
            ArrayField::new('roles'),    
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
        ];
   } 
    
}
