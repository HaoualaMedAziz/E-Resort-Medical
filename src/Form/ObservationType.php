<?php

namespace App\Form;

use App\Entity\Observation;
use App\Entity\Resident;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ObservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            //->add('createdAt', null, [
            //    'widget' => 'single_text',
            //])
            
            ->add('resident', EntityType::class, [
                'class' => Resident::class,
                'choice_label' => [$this, 'formatResidentLabel'],
                
            ])
            ->add('description', TextareaType::class, [
            'label' => 'Description',
            ])
            ->add('createdAt', null, [
            'data' => new \DateTimeImmutable(),
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Observation::class,
        ]);
    }

    public function formatResidentLabel(Resident $resident): string
    {
        return sprintf('%s %s | Chambre : %s', $resident->getFirstName(), $resident->getLastName(), $resident->getNbChambre());
    }
}
