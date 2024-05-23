<?php

namespace App\Form;

use App\Entity\MembreFamille;
use App\Entity\Visite;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VisiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateVisite', null, [
                'widget' => 'single_text',
            ])
            ->add('description')
            ->add('membreFamille', EntityType::class, [
                'class' => MembreFamille::class,
                'choice_label' => 'lastName',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Visite::class,
        ]);
    }
}
