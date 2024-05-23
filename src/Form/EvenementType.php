<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Resident;
use App\Entity\TypeEvenement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateEvenement', null, [
                'widget' => 'single_text',
            ])
            ->add('description')
            ->add('typeEvenement', EntityType::class, [
                'class' => TypeEvenement::class,
                'choice_label' => 'titre',
            ])
            ->add('resident', EntityType::class, [
                'class' => Resident::class,
                'choice_label' => function ($resident) {
                    return $resident->getLastName() . ' ' . $resident->getFirstName();
                },
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
