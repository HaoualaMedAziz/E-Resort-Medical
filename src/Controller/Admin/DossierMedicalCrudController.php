<?php

namespace App\Controller\Admin;

use App\Entity\DossierMedical;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class DossierMedicalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DossierMedical::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->setLabel('Num Dossier')->hideOnForm(),
            AssociationField::new('resident'),
            TextField::new('taille')->setLabel('Taille (cm)'),
            TextField::new('poids')->setLabel('Poids (kg)'),
            TextField::new('maladiesAnciennes')->hideOnIndex()->hideOnIndex(),
            TextField::new('operationsAnciennes')->hideOnIndex(),
            TextField::new('allergies')->hideOnIndex(),
            TextField::new('maladiesActuelles')->hideOnIndex(),
            TextField::new('traitementEnCours')->hideOnIndex(),
            TextField::new('DescriptionPathologies')->hideOnIndex(),
            BooleanField::new('hospitalisationRecente')->hideOnIndex(),
            TextField::new('causeHospitalisationRecente')->hideOnIndex(),
            TextField::new('dureeHospitalisationRecente')->hideOnIndex(),
            TextField::new('sortieHospitalisationRecente')->hideOnIndex(),
            BooleanField::new('conduiteArisque')->hideOnIndex(),
            BooleanField::new('alcool')->hideOnIndex(),
            BooleanField::new('tabac')->hideOnIndex(),
            BooleanField::new('enCoursDeSevrage')->hideOnIndex(),
            BooleanField::new('portageDeBacterieMultiresistante')->hideOnIndex(),
            BooleanField::new('deficiencesSensorielles')->hideOnIndex(),
            BooleanField::new('boolean')->hideOnIndex(),
            BooleanField::new('auditive')->hideOnIndex(),
            BooleanField::new('gustative')->hideOnIndex(),
            BooleanField::new('olfactive')->hideOnIndex(),
            BooleanField::new('vestibulaire')->hideOnIndex(),
            BooleanField::new('tactile')->hideOnIndex(),
            BooleanField::new('ideesDelirantes')->hideOnIndex(),
            BooleanField::new('hallucinations')->hideOnIndex(),
            BooleanField::new('agitationsAgressiviteCris')->hideOnIndex(),
            BooleanField::new('depression')->hideOnIndex(),
            BooleanField::new('anxiete')->hideOnIndex(),
            BooleanField::new('apathie')->hideOnIndex(),
            BooleanField::new('desinhibition')->hideOnIndex(),
            BooleanField::new('troubleDuSommeil')->hideOnIndex(),
            BooleanField::new('comportementsMoteursAberrants')->hideOnIndex(),
            BooleanField::new('oxygenotherapie')->hideOnIndex(),
            BooleanField::new('sondesAlimentaion')->hideOnIndex(),
            BooleanField::new('sondesTracheotomie')->hideOnIndex(),
            BooleanField::new('sondesUrinaire')->hideOnIndex(),
            BooleanField::new('gastronomie')->hideOnIndex(),
            BooleanField::new('colostomie')->hideOnIndex(),
            BooleanField::new('fauteuilRoulant')->hideOnIndex(),
            BooleanField::new('litMedicalise')->hideOnIndex(),
            BooleanField::new('matelasAntiEscarres')->hideOnIndex(),
            BooleanField::new('deambulateur')->hideOnIndex(),
            BooleanField::new('ureterostomie')->hideOnIndex(),
            BooleanField::new('appareillageVentilatoire')->hideOnIndex(),
            BooleanField::new('pompe')->hideOnIndex(),
            BooleanField::new('chambreImplantable')->hideOnIndex(),
            BooleanField::new('dialysePeritoneale')->hideOnIndex(),
            BooleanField::new('orthese')->hideOnIndex(),
            BooleanField::new('prothese')->hideOnIndex(),
            BooleanField::new('paceMaker')->hideOnIndex(),
            TextField::new('deplacementInterieur')->hideOnIndex(),
            TextField::new('deplacementExterieur')->hideOnIndex(),
            TextField::new('toiletteHaut')->hideOnIndex(),
            TextField::new('toiletteBas')->hideOnIndex(),
            TextField::new('eliminationUrinaire')->hideOnIndex(),
            TextField::new('eliminationFecale')->hideOnIndex(),
            TextField::new('habillageHaut')->hideOnIndex(),
            TextField::new('habillageMoyen')->hideOnIndex(),
            TextField::new('habillageBas')->hideOnIndex(),
            TextField::new('alimentationSeServire')->hideOnIndex(),
            TextField::new('alimentationManger')->hideOnIndex(),
            TextField::new('orientationTemps')->hideOnIndex(),
            TextField::new('orientationEspace')->hideOnIndex(),
            TextField::new('communicationPourAlerter')->hideOnIndex(),
            TextField::new('coherence')->hideOnIndex(),
            BooleanField::new('reeducation')->hideOnIndex(),
            BooleanField::new('kinesitherapie')->hideOnIndex(),
            BooleanField::new('orthophonie')->hideOnIndex(),
            BooleanField::new('autreReeducation')->hideOnIndex(),
            BooleanField::new('risqueDeChute')->hideOnIndex(),
            BooleanField::new('risqueDeFausseRoute')->hideOnIndex(),
            BooleanField::new('soinsPalliatifs')->hideOnIndex(),
            BooleanField::new('pancementsOuSoisCutanes')->hideOnIndex(),
            TextField::new('nomMedcin')->hideOnIndex(),
            TextField::new('prenomMedcin')->hideOnIndex(),
            TextField::new('adresseMedcin')->hideOnIndex(),
            TextField::new('telephoneMedcin')->hideOnIndex(),
            ];
    }
    
}