<?php

namespace App\Entity;

use App\Repository\DossierMedicalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DossierMedicalRepository::class)]
class DossierMedical
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Resident $resident = null;

    #[ORM\Column(length: 255)]
    private ?string $taille = null;

    #[ORM\Column(length: 255)]
    private ?string $poids = null;

    #[ORM\Column(length: 255)]
    private ?string $maladiesAnciennes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $operationsAnciennes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $allergies = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $maladiesActuelles = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $traitementEnCours = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $DescriptionPathologies = null;

    #[ORM\Column(nullable: true)]
    private ?bool $hospitalisationRecente = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $causeHospitalisationRecente = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dureeHospitalisationRecente = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sortieHospitalisationRecente = null;

    #[ORM\Column(nullable: true)]
    private ?bool $conduiteArisque = null;

    #[ORM\Column(nullable: true)]
    private ?bool $alcool = null;

    #[ORM\Column(nullable: true)]
    private ?bool $tabac = null;

    #[ORM\Column(nullable: true)]
    private ?bool $enCoursDeSevrage = null;

    #[ORM\Column(nullable: true)]
    private ?bool $portageDeBacterieMultiresistante = null;

    #[ORM\Column]
    private ?bool $deficiencesSensorielles = null;

    #[ORM\Column(nullable: true)]
    private ?bool $boolean = null;

    #[ORM\Column(nullable: true)]
    private ?bool $auditive = null;

    #[ORM\Column(nullable: true)]
    private ?bool $gustative = null;

    #[ORM\Column(nullable: true)]
    private ?bool $olfactive = null;

    #[ORM\Column(nullable: true)]
    private ?bool $vestibulaire = null;

    #[ORM\Column(nullable: true)]
    private ?bool $tactile = null;

    #[ORM\Column(nullable: true)]
    private ?bool $ideesDelirantes = null;

    #[ORM\Column(nullable: true)]
    private ?bool $hallucinations = null;

    #[ORM\Column(nullable: true)]
    private ?bool $agitationsAgressiviteCris = null;

    #[ORM\Column(nullable: true)]
    private ?bool $depression = null;

    #[ORM\Column(nullable: true)]
    private ?bool $anxiete = null;

    #[ORM\Column(nullable: true)]
    private ?bool $apathie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $desinhibition = null;

    #[ORM\Column(nullable: true)]
    private ?bool $troubleDuSommeil = null;

    #[ORM\Column(nullable: true)]
    private ?bool $comportementsMoteursAberrants = null;

    #[ORM\Column(nullable: true)]
    private ?bool $oxygenotherapie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $sondesAlimentaion = null;

    #[ORM\Column(nullable: true)]
    private ?bool $sondesTracheotomie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $sondesUrinaire = null;

    #[ORM\Column(nullable: true)]
    private ?bool $gastronomie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $colostomie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $fauteuilRoulant = null;

    #[ORM\Column(nullable: true)]
    private ?bool $litMedicalise = null;

    #[ORM\Column(nullable: true)]
    private ?bool $matelasAntiEscarres = null;

    #[ORM\Column(nullable: true)]
    private ?bool $deambulateur = null;

    #[ORM\Column(nullable: true)]
    private ?bool $ureterostomie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $appareillageVentilatoire = null;

    #[ORM\Column(nullable: true)]
    private ?bool $pompe = null;

    #[ORM\Column(nullable: true)]
    private ?bool $chambreImplantable = null;

    #[ORM\Column(nullable: true)]
    private ?bool $dialysePeritoneale = null;

    #[ORM\Column(nullable: true)]
    private ?bool $orthese = null;

    #[ORM\Column(nullable: true)]
    private ?bool $prothese = null;

    #[ORM\Column(nullable: true)]
    private ?bool $paceMaker = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $deplacementInterieur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $deplacementExterieur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $toiletteHaut = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $toiletteBas = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $eliminationUrinaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $eliminationFecale = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $habillageHaut = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $habillageMoyen = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $habillageBas = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $alimentationSeServire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $alimentationManger = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $orientationTemps = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $orientationEspace = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $communicationPourAlerter = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $coherence = null;

    #[ORM\Column(nullable: true)]
    private ?bool $reeducation = null;

    #[ORM\Column(nullable: true)]
    private ?bool $kinesitherapie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $orthophonie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $autreReeducation = null;

    #[ORM\Column(nullable: true)]
    private ?bool $risqueDeChute = null;

    #[ORM\Column(nullable: true)]
    private ?bool $risqueDeFausseRoute = null;

    #[ORM\Column(nullable: true)]
    private ?bool $soinsPalliatifs = null;

    #[ORM\Column(nullable: true)]
    private ?bool $pancementsOuSoisCutanes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomMedcin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenomMedcin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresseMedcin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephoneMedcin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResident(): ?Resident
    {
        return $this->resident;
    }

    public function setResident(?Resident $resident): static
    {
        $this->resident = $resident;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoids(): ?string
    {
        return $this->poids;
    }

    public function setPoids(string $poids): static
    {
        $this->poids = $poids;

        return $this;
    }

    public function getMaladiesAnciennes(): ?string
    {
        return $this->maladiesAnciennes;
    }

    public function setMaladiesAnciennes(string $maladiesAnciennes): static
    {
        $this->maladiesAnciennes = $maladiesAnciennes;

        return $this;
    }

    public function getOperationsAnciennes(): ?string
    {
        return $this->operationsAnciennes;
    }

    public function setOperationsAnciennes(?string $operationsAnciennes): static
    {
        $this->operationsAnciennes = $operationsAnciennes;

        return $this;
    }

    public function getAllergies(): ?string
    {
        return $this->allergies;
    }

    public function setAllergies(?string $allergies): static
    {
        $this->allergies = $allergies;

        return $this;
    }

    public function getMaladiesActuelles(): ?string
    {
        return $this->maladiesActuelles;
    }

    public function setMaladiesActuelles(?string $maladiesActuelles): static
    {
        $this->maladiesActuelles = $maladiesActuelles;

        return $this;
    }

    public function getTraitementEnCours(): ?string
    {
        return $this->traitementEnCours;
    }

    public function setTraitementEnCours(?string $traitementEnCours): static
    {
        $this->traitementEnCours = $traitementEnCours;

        return $this;
    }

    public function getDescriptionPathologies(): ?string
    {
        return $this->DescriptionPathologies;
    }

    public function setDescriptionPathologies(?string $DescriptionPathologies): static
    {
        $this->DescriptionPathologies = $DescriptionPathologies;

        return $this;
    }

    public function isHospitalisationRecente(): ?bool
    {
        return $this->hospitalisationRecente;
    }

    public function setHospitalisationRecente(?bool $hospitalisationRecente): static
    {
        $this->hospitalisationRecente = $hospitalisationRecente;

        return $this;
    }

    public function getCauseHospitalisationRecente(): ?string
    {
        return $this->causeHospitalisationRecente;
    }

    public function setCauseHospitalisationRecente(?string $causeHospitalisationRecente): static
    {
        $this->causeHospitalisationRecente = $causeHospitalisationRecente;

        return $this;
    }

    public function getDureeHospitalisationRecente(): ?string
    {
        return $this->dureeHospitalisationRecente;
    }

    public function setDureeHospitalisationRecente(?string $dureeHospitalisationRecente): static
    {
        $this->dureeHospitalisationRecente = $dureeHospitalisationRecente;

        return $this;
    }

    public function getSortieHospitalisationRecente(): ?string
    {
        return $this->sortieHospitalisationRecente;
    }

    public function setSortieHospitalisationRecente(?string $sortieHospitalisationRecente): static
    {
        $this->sortieHospitalisationRecente = $sortieHospitalisationRecente;

        return $this;
    }

    public function isConduiteArisque(): ?bool
    {
        return $this->conduiteArisque;
    }

    public function setConduiteArisque(?bool $conduiteArisque): static
    {
        $this->conduiteArisque = $conduiteArisque;

        return $this;
    }

    public function isAlcool(): ?bool
    {
        return $this->alcool;
    }

    public function setAlcool(?bool $alcool): static
    {
        $this->alcool = $alcool;

        return $this;
    }

    public function isTabac(): ?bool
    {
        return $this->tabac;
    }

    public function setTabac(?bool $tabac): static
    {
        $this->tabac = $tabac;

        return $this;
    }

    public function isEnCoursDeSevrage(): ?bool
    {
        return $this->enCoursDeSevrage;
    }

    public function setEnCoursDeSevrage(?bool $enCoursDeSevrage): static
    {
        $this->enCoursDeSevrage = $enCoursDeSevrage;

        return $this;
    }

    public function isPortageDeBacterieMultiresistante(): ?bool
    {
        return $this->portageDeBacterieMultiresistante;
    }

    public function setPortageDeBacterieMultiresistante(?bool $portageDeBacterieMultiresistante): static
    {
        $this->portageDeBacterieMultiresistante = $portageDeBacterieMultiresistante;

        return $this;
    }

    public function isDeficiencesSensorielles(): ?bool
    {
        return $this->deficiencesSensorielles;
    }

    public function setDeficiencesSensorielles(bool $deficiencesSensorielles): static
    {
        $this->deficiencesSensorielles = $deficiencesSensorielles;

        return $this;
    }

    public function isBoolean(): ?bool
    {
        return $this->boolean;
    }

    public function setBoolean(?bool $boolean): static
    {
        $this->boolean = $boolean;

        return $this;
    }

    public function isAuditive(): ?bool
    {
        return $this->auditive;
    }

    public function setAuditive(?bool $auditive): static
    {
        $this->auditive = $auditive;

        return $this;
    }

    public function isGustative(): ?bool
    {
        return $this->gustative;
    }

    public function setGustative(?bool $gustative): static
    {
        $this->gustative = $gustative;

        return $this;
    }

    public function isOlfactive(): ?bool
    {
        return $this->olfactive;
    }

    public function setOlfactive(?bool $olfactive): static
    {
        $this->olfactive = $olfactive;

        return $this;
    }

    public function isVestibulaire(): ?bool
    {
        return $this->vestibulaire;
    }

    public function setVestibulaire(?bool $vestibulaire): static
    {
        $this->vestibulaire = $vestibulaire;

        return $this;
    }

    public function isTactile(): ?bool
    {
        return $this->tactile;
    }

    public function setTactile(?bool $tactile): static
    {
        $this->tactile = $tactile;

        return $this;
    }

    public function isIdeesDelirantes(): ?bool
    {
        return $this->ideesDelirantes;
    }

    public function setIdeesDelirantes(?bool $ideesDelirantes): static
    {
        $this->ideesDelirantes = $ideesDelirantes;

        return $this;
    }

    public function isHallucinations(): ?bool
    {
        return $this->hallucinations;
    }

    public function setHallucinations(?bool $hallucinations): static
    {
        $this->hallucinations = $hallucinations;

        return $this;
    }

    public function isAgitationsAgressiviteCris(): ?bool
    {
        return $this->agitationsAgressiviteCris;
    }

    public function setAgitationsAgressiviteCris(?bool $agitationsAgressiviteCris): static
    {
        $this->agitationsAgressiviteCris = $agitationsAgressiviteCris;

        return $this;
    }

    public function isDepression(): ?bool
    {
        return $this->depression;
    }

    public function setDepression(?bool $depression): static
    {
        $this->depression = $depression;

        return $this;
    }

    public function isAnxiete(): ?bool
    {
        return $this->anxiete;
    }

    public function setAnxiete(?bool $anxiete): static
    {
        $this->anxiete = $anxiete;

        return $this;
    }

    public function isApathie(): ?bool
    {
        return $this->apathie;
    }

    public function setApathie(?bool $apathie): static
    {
        $this->apathie = $apathie;

        return $this;
    }

    public function isDesinhibition(): ?bool
    {
        return $this->desinhibition;
    }

    public function setDesinhibition(?bool $desinhibition): static
    {
        $this->desinhibition = $desinhibition;

        return $this;
    }

    public function isTroubleDuSommeil(): ?bool
    {
        return $this->troubleDuSommeil;
    }

    public function setTroubleDuSommeil(?bool $troubleDuSommeil): static
    {
        $this->troubleDuSommeil = $troubleDuSommeil;

        return $this;
    }

    public function isComportementsMoteursAberrants(): ?bool
    {
        return $this->comportementsMoteursAberrants;
    }

    public function setComportementsMoteursAberrants(?bool $comportementsMoteursAberrants): static
    {
        $this->comportementsMoteursAberrants = $comportementsMoteursAberrants;

        return $this;
    }

    public function isOxygenotherapie(): ?bool
    {
        return $this->oxygenotherapie;
    }

    public function setOxygenotherapie(?bool $oxygenotherapie): static
    {
        $this->oxygenotherapie = $oxygenotherapie;

        return $this;
    }

    public function isSondesAlimentaion(): ?bool
    {
        return $this->sondesAlimentaion;
    }

    public function setSondesAlimentaion(?bool $sondesAlimentaion): static
    {
        $this->sondesAlimentaion = $sondesAlimentaion;

        return $this;
    }

    public function isSondesTracheotomie(): ?bool
    {
        return $this->sondesTracheotomie;
    }

    public function setSondesTracheotomie(?bool $sondesTracheotomie): static
    {
        $this->sondesTracheotomie = $sondesTracheotomie;

        return $this;
    }

    public function isSondesUrinaire(): ?bool
    {
        return $this->sondesUrinaire;
    }

    public function setSondesUrinaire(?bool $sondesUrinaire): static
    {
        $this->sondesUrinaire = $sondesUrinaire;

        return $this;
    }

    public function isGastronomie(): ?bool
    {
        return $this->gastronomie;
    }

    public function setGastronomie(?bool $gastronomie): static
    {
        $this->gastronomie = $gastronomie;

        return $this;
    }

    public function isColostomie(): ?bool
    {
        return $this->colostomie;
    }

    public function setColostomie(?bool $colostomie): static
    {
        $this->colostomie = $colostomie;

        return $this;
    }

    public function isFauteuilRoulant(): ?bool
    {
        return $this->fauteuilRoulant;
    }

    public function setFauteuilRoulant(?bool $fauteuilRoulant): static
    {
        $this->fauteuilRoulant = $fauteuilRoulant;

        return $this;
    }

    public function isLitMedicalise(): ?bool
    {
        return $this->litMedicalise;
    }

    public function setLitMedicalise(?bool $litMedicalise): static
    {
        $this->litMedicalise = $litMedicalise;

        return $this;
    }

    public function isMatelasAntiEscarres(): ?bool
    {
        return $this->matelasAntiEscarres;
    }

    public function setMatelasAntiEscarres(?bool $matelasAntiEscarres): static
    {
        $this->matelasAntiEscarres = $matelasAntiEscarres;

        return $this;
    }

    public function isDeambulateur(): ?bool
    {
        return $this->deambulateur;
    }

    public function setDeambulateur(?bool $deambulateur): static
    {
        $this->deambulateur = $deambulateur;

        return $this;
    }

    public function isUreterostomie(): ?bool
    {
        return $this->ureterostomie;
    }

    public function setUreterostomie(?bool $ureterostomie): static
    {
        $this->ureterostomie = $ureterostomie;

        return $this;
    }

    public function isAppareillageVentilatoire(): ?bool
    {
        return $this->appareillageVentilatoire;
    }

    public function setAppareillageVentilatoire(?bool $appareillageVentilatoire): static
    {
        $this->appareillageVentilatoire = $appareillageVentilatoire;

        return $this;
    }

    public function isPompe(): ?bool
    {
        return $this->pompe;
    }

    public function setPompe(?bool $pompe): static
    {
        $this->pompe = $pompe;

        return $this;
    }

    public function isChambreImplantable(): ?bool
    {
        return $this->chambreImplantable;
    }

    public function setChambreImplantable(?bool $chambreImplantable): static
    {
        $this->chambreImplantable = $chambreImplantable;

        return $this;
    }

    public function isDialysePeritoneale(): ?bool
    {
        return $this->dialysePeritoneale;
    }

    public function setDialysePeritoneale(?bool $dialysePeritoneale): static
    {
        $this->dialysePeritoneale = $dialysePeritoneale;

        return $this;
    }

    public function isOrthese(): ?bool
    {
        return $this->orthese;
    }

    public function setOrthese(?bool $orthese): static
    {
        $this->orthese = $orthese;

        return $this;
    }

    public function isProthese(): ?bool
    {
        return $this->prothese;
    }

    public function setProthese(?bool $prothese): static
    {
        $this->prothese = $prothese;

        return $this;
    }

    public function isPaceMaker(): ?bool
    {
        return $this->paceMaker;
    }

    public function setPaceMaker(?bool $paceMaker): static
    {
        $this->paceMaker = $paceMaker;

        return $this;
    }

    public function getDeplacementInterieur(): ?string
    {
        return $this->deplacementInterieur;
    }

    public function setDeplacementInterieur(?string $deplacementInterieur): static
    {
        $this->deplacementInterieur = $deplacementInterieur;

        return $this;
    }

    public function getDeplacementExterieur(): ?string
    {
        return $this->deplacementExterieur;
    }

    public function setDeplacementExterieur(?string $deplacementExterieur): static
    {
        $this->deplacementExterieur = $deplacementExterieur;

        return $this;
    }

    public function getToiletteHaut(): ?string
    {
        return $this->toiletteHaut;
    }

    public function setToiletteHaut(?string $toiletteHaut): static
    {
        $this->toiletteHaut = $toiletteHaut;

        return $this;
    }

    public function getToiletteBas(): ?string
    {
        return $this->toiletteBas;
    }

    public function setToiletteBas(?string $toiletteBas): static
    {
        $this->toiletteBas = $toiletteBas;

        return $this;
    }

    public function getEliminationUrinaire(): ?string
    {
        return $this->eliminationUrinaire;
    }

    public function setEliminationUrinaire(?string $eliminationUrinaire): static
    {
        $this->eliminationUrinaire = $eliminationUrinaire;

        return $this;
    }

    public function getEliminationFecale(): ?string
    {
        return $this->eliminationFecale;
    }

    public function setEliminationFecale(?string $eliminationFecale): static
    {
        $this->eliminationFecale = $eliminationFecale;

        return $this;
    }

    public function getHabillageHaut(): ?string
    {
        return $this->habillageHaut;
    }

    public function setHabillageHaut(?string $habillageHaut): static
    {
        $this->habillageHaut = $habillageHaut;

        return $this;
    }

    public function getHabillageMoyen(): ?string
    {
        return $this->habillageMoyen;
    }

    public function setHabillageMoyen(?string $habillageMoyen): static
    {
        $this->habillageMoyen = $habillageMoyen;

        return $this;
    }

    public function getHabillageBas(): ?string
    {
        return $this->habillageBas;
    }

    public function setHabillageBas(?string $habillageBas): static
    {
        $this->habillageBas = $habillageBas;

        return $this;
    }

    public function getAlimentationSeServire(): ?string
    {
        return $this->alimentationSeServire;
    }

    public function setAlimentationSeServire(?string $alimentationSeServire): static
    {
        $this->alimentationSeServire = $alimentationSeServire;

        return $this;
    }

    public function getAlimentationManger(): ?string
    {
        return $this->alimentationManger;
    }

    public function setAlimentationManger(?string $alimentationManger): static
    {
        $this->alimentationManger = $alimentationManger;

        return $this;
    }

    public function getOrientationTemps(): ?string
    {
        return $this->orientationTemps;
    }

    public function setOrientationTemps(?string $orientationTemps): static
    {
        $this->orientationTemps = $orientationTemps;

        return $this;
    }

    public function getOrientationEspace(): ?string
    {
        return $this->orientationEspace;
    }

    public function setOrientationEspace(?string $orientationEspace): static
    {
        $this->orientationEspace = $orientationEspace;

        return $this;
    }

    public function getCommunicationPourAlerter(): ?string
    {
        return $this->communicationPourAlerter;
    }

    public function setCommunicationPourAlerter(?string $communicationPourAlerter): static
    {
        $this->communicationPourAlerter = $communicationPourAlerter;

        return $this;
    }

    public function getCoherence(): ?string
    {
        return $this->coherence;
    }

    public function setCoherence(?string $coherence): static
    {
        $this->coherence = $coherence;

        return $this;
    }

    public function isReeducation(): ?bool
    {
        return $this->reeducation;
    }

    public function setReeducation(?bool $reeducation): static
    {
        $this->reeducation = $reeducation;

        return $this;
    }

    public function isKinesitherapie(): ?bool
    {
        return $this->kinesitherapie;
    }

    public function setKinesitherapie(?bool $kinesitherapie): static
    {
        $this->kinesitherapie = $kinesitherapie;

        return $this;
    }

    public function isOrthophonie(): ?bool
    {
        return $this->orthophonie;
    }

    public function setOrthophonie(?bool $orthophonie): static
    {
        $this->orthophonie = $orthophonie;

        return $this;
    }

    public function getAutreReeducation(): ?string
    {
        return $this->autreReeducation;
    }

    public function setAutreReeducation(?string $autreReeducation): static
    {
        $this->autreReeducation = $autreReeducation;

        return $this;
    }

    public function isRisqueDeChute(): ?bool
    {
        return $this->risqueDeChute;
    }

    public function setRisqueDeChute(?bool $risqueDeChute): static
    {
        $this->risqueDeChute = $risqueDeChute;

        return $this;
    }

    public function isRisqueDeFausseRoute(): ?bool
    {
        return $this->risqueDeFausseRoute;
    }

    public function setRisqueDeFausseRoute(?bool $risqueDeFausseRoute): static
    {
        $this->risqueDeFausseRoute = $risqueDeFausseRoute;

        return $this;
    }

    public function isSoinsPalliatifs(): ?bool
    {
        return $this->soinsPalliatifs;
    }

    public function setSoinsPalliatifs(?bool $soinsPalliatifs): static
    {
        $this->soinsPalliatifs = $soinsPalliatifs;

        return $this;
    }

    public function isPancementsOuSoisCutanes(): ?bool
    {
        return $this->pancementsOuSoisCutanes;
    }

    public function setPancementsOuSoisCutanes(?bool $pancementsOuSoisCutanes): static
    {
        $this->pancementsOuSoisCutanes = $pancementsOuSoisCutanes;

        return $this;
    }

    public function getNomMedcin(): ?string
    {
        return $this->nomMedcin;
    }

    public function setNomMedcin(?string $nomMedcin): static
    {
        $this->nomMedcin = $nomMedcin;

        return $this;
    }

    public function getPrenomMedcin(): ?string
    {
        return $this->prenomMedcin;
    }

    public function setPrenomMedcin(?string $prenomMedcin): static
    {
        $this->prenomMedcin = $prenomMedcin;

        return $this;
    }

    public function getAdresseMedcin(): ?string
    {
        return $this->adresseMedcin;
    }

    public function setAdresseMedcin(?string $adresseMedcin): static
    {
        $this->adresseMedcin = $adresseMedcin;

        return $this;
    }

    public function getTelephoneMedcin(): ?string
    {
        return $this->telephoneMedcin;
    }

    public function setTelephoneMedcin(?string $telephoneMedcin): static
    {
        $this->telephoneMedcin = $telephoneMedcin;

        return $this;
    }
}
