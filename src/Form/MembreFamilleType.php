<?php

namespace App\Form;

use App\Entity\MembreFamille;
use App\Entity\Resident;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class MembreFamilleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            //->add('password')
            ->add('password', PasswordType::class, [
            'hash_property_path' => 'password',
            'mapped' => false,
            ])
            ->add('firstName')
            ->add('lastName')
            ->add('telephone')
            ->add('address')
            ->add('zipCode')
            ->add('city')
            ->add('numPassport')
            ->add('resident', EntityType::class, [
                'class' => Resident::class,
                'choice_label' => function ($resident) {
                return $resident->getLastName() . ' ' . $resident->getFirstName();
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MembreFamille::class,
        ]);
    }
}
