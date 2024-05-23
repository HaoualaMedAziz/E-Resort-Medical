<?php

namespace App\Form;

use App\Entity\Infirmier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class InfirmierType extends AbstractType
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
             ->add('genre', ChoiceType::class, [
                'choices' => [
                    'Male' => 'male',
                    'Female' => 'female',
                ],
                //'placeholder' => 'Choose an option', // Optionnel : affiche un texte par défaut
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Infirmier::class,
        ]);
    }
}
