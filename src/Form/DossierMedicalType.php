<?php

namespace App\Form;

use App\Entity\DossierMedical;
use App\Entity\Resident;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DossierMedicalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('resident', EntityType::class, [
                'class' => Resident::class,
                'choice_label' => function ($resident) {
                    return $resident->getLastName() . ' ' . $resident->getFirstName();
                },
                'help' => 'Message d\'aide pour le champ Resident',   
            ])
            ->add('taille')
            ->add('poids')
            ->add('maladiesAnciennes')
            ->add('operationsAnciennes')
            ->add('allergies')
            ->add('maladiesActuelles')
            ->add('traitementEnCours')
            ->add('DescriptionPathologies')
            ->add('hospitalisationRecente')
            ->add('causeHospitalisationRecente')
            ->add('dureeHospitalisationRecente')
            ->add('sortieHospitalisationRecente')
            ->add('conduiteArisque')
            ->add('alcool')
            ->add('tabac')
            ->add('enCoursDeSevrage')
            ->add('portageDeBacterieMultiresistante')
            ->add('deficiencesSensorielles')
            ->add('boolean')
            ->add('auditive')
            ->add('gustative')
            ->add('olfactive')
            ->add('vestibulaire')
            ->add('tactile')
            ->add('ideesDelirantes')
            ->add('hallucinations')
            ->add('agitationsAgressiviteCris')
            ->add('depression')
            ->add('anxiete')
            ->add('apathie')
            ->add('desinhibition')
            ->add('troubleDuSommeil')
            ->add('comportementsMoteursAberrants')
            ->add('oxygenotherapie')
            ->add('sondesAlimentaion')
            ->add('sondesTracheotomie')
            ->add('sondesUrinaire')
            ->add('gastronomie')
            ->add('colostomie')
            ->add('fauteuilRoulant')
            ->add('litMedicalise')
            ->add('matelasAntiEscarres')
            ->add('deambulateur')
            ->add('ureterostomie')
            ->add('appareillageVentilatoire')
            ->add('pompe')
            ->add('chambreImplantable')
            ->add('dialysePeritoneale')
            ->add('orthese')
            ->add('prothese')
            ->add('paceMaker')
            ->add('deplacementInterieur')
            ->add('deplacementExterieur')
            ->add('toiletteHaut')
            ->add('toiletteBas')
            ->add('eliminationUrinaire')
            ->add('eliminationFecale')
            ->add('habillageHaut')
            ->add('habillageMoyen')
            ->add('habillageBas')
            ->add('alimentationSeServire')
            ->add('alimentationManger')
            ->add('orientationTemps')
            ->add('orientationEspace')
            ->add('communicationPourAlerter')
            ->add('coherence')
            ->add('reeducation')
            ->add('kinesitherapie')
            ->add('orthophonie')
            ->add('autreReeducation')
            ->add('risqueDeChute')
            ->add('risqueDeFausseRoute')
            ->add('soinsPalliatifs')
            ->add('pancementsOuSoisCutanes')
            ->add('nomMedcin')
            ->add('prenomMedcin')
            ->add('adresseMedcin')
            ->add('telephoneMedcin')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DossierMedical::class,
        ]);
    }
}
