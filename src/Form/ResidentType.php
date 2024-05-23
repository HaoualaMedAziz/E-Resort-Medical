<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\MembreFamille;
use App\Entity\Observation;
use App\Entity\Resident;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class ResidentType extends AbstractType
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
            ->add('nbChambre')
            ->add('membreFamille', EntityType::class, [
            'class' => MembreFamille::class,
            'choice_label' => function (MembreFamille $membreFamille) {
            return $membreFamille->getLastName() . ' ' . $membreFamille->getFirstName();
            },
            ])
            
            //->add('observations', EntityType::class, [
            //    'class' => Observation::class,
            //    'choice_label' => 'id',
            //    'multiple' => true,
            //    'expanded' => true,
            //])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Resident::class,
        ]);
    }
}
