<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Resident;
use App\Entity\TypeEvenement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgendaType extends AbstractType
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
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
