<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240501133702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier_medical ADD operations_anciennes VARCHAR(255) DEFAULT NULL, ADD hospitalisation_recente TINYINT(1) DEFAULT NULL, ADD duree_hospitalisation_recente VARCHAR(255) DEFAULT NULL, ADD idees_delirantes TINYINT(1) DEFAULT NULL, ADD agitations_agressivite_cris TINYINT(1) DEFAULT NULL, ADD depression TINYINT(1) DEFAULT NULL, ADD anxiete TINYINT(1) DEFAULT NULL, ADD desinhibition TINYINT(1) DEFAULT NULL, ADD oxygenotherapie TINYINT(1) DEFAULT NULL, ADD sondes_tracheotomie TINYINT(1) DEFAULT NULL, ADD lit_medicalise TINYINT(1) DEFAULT NULL, ADD deambulateur TINYINT(1) DEFAULT NULL, ADD ureterostomie TINYINT(1) DEFAULT NULL, ADD dialyse_peritoneale TINYINT(1) DEFAULT NULL, ADD orthese TINYINT(1) DEFAULT NULL, ADD prothese TINYINT(1) DEFAULT NULL, ADD deplacement_interieur VARCHAR(255) DEFAULT NULL, ADD deplacement_exterieur VARCHAR(255) DEFAULT NULL, ADD elimination_fecale VARCHAR(255) DEFAULT NULL, ADD coherence VARCHAR(255) DEFAULT NULL, ADD reeducation TINYINT(1) DEFAULT NULL, ADD kinesitherapie TINYINT(1) DEFAULT NULL, ADD autre_reeducation VARCHAR(255) DEFAULT NULL, ADD pancements_ou_sois_cutanes TINYINT(1) DEFAULT NULL, ADD nom_medcin VARCHAR(255) DEFAULT NULL, ADD prenom_medcin VARCHAR(255) DEFAULT NULL, ADD adresse_medcin VARCHAR(255) DEFAULT NULL, ADD telephone_medcin VARCHAR(255) DEFAULT NULL, DROP opérations_anciennes, DROP hospitalisation_récente, DROP durée_hospitalisation_recente, DROP idées_délirantes, DROP agitations_agressivitécris, DROP dépression, DROP anxiété, DROP désinhibition, DROP oxygénothérapie, DROP sondes_trachéotomie, DROP lit_médicalisé, DROP déambulateur, DROP urétérostomie, DROP dialyse_péritonéale, DROP orthése, DROP prothése, DROP déplacement_intérieur, DROP déplacement_extérieur, DROP elimination_fécale, DROP cohérence, DROP rééducation, DROP kinésithérapie, DROP autre_rééducation, DROP pancements_ou_sois_cutanès, DROP nom_médcin, DROP prenom_médcin, DROP adresse_médcin, DROP téléphone_médcin');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier_medical ADD opérations_anciennes VARCHAR(255) DEFAULT NULL, ADD hospitalisation_récente TINYINT(1) DEFAULT NULL, ADD durée_hospitalisation_recente VARCHAR(255) DEFAULT NULL, ADD idées_délirantes TINYINT(1) DEFAULT NULL, ADD agitations_agressivitécris TINYINT(1) DEFAULT NULL, ADD dépression TINYINT(1) DEFAULT NULL, ADD anxiété TINYINT(1) DEFAULT NULL, ADD désinhibition TINYINT(1) DEFAULT NULL, ADD oxygénothérapie TINYINT(1) DEFAULT NULL, ADD sondes_trachéotomie TINYINT(1) DEFAULT NULL, ADD lit_médicalisé TINYINT(1) DEFAULT NULL, ADD déambulateur TINYINT(1) DEFAULT NULL, ADD urétérostomie TINYINT(1) DEFAULT NULL, ADD dialyse_péritonéale TINYINT(1) DEFAULT NULL, ADD orthése TINYINT(1) DEFAULT NULL, ADD prothése TINYINT(1) DEFAULT NULL, ADD déplacement_intérieur VARCHAR(255) DEFAULT NULL, ADD déplacement_extérieur VARCHAR(255) DEFAULT NULL, ADD elimination_fécale VARCHAR(255) DEFAULT NULL, ADD cohérence VARCHAR(255) DEFAULT NULL, ADD rééducation TINYINT(1) DEFAULT NULL, ADD kinésithérapie TINYINT(1) DEFAULT NULL, ADD autre_rééducation VARCHAR(255) DEFAULT NULL, ADD pancements_ou_sois_cutanès TINYINT(1) DEFAULT NULL, ADD nom_médcin VARCHAR(255) DEFAULT NULL, ADD prenom_médcin VARCHAR(255) DEFAULT NULL, ADD adresse_médcin VARCHAR(255) DEFAULT NULL, ADD téléphone_médcin VARCHAR(255) DEFAULT NULL, DROP operations_anciennes, DROP hospitalisation_recente, DROP duree_hospitalisation_recente, DROP idees_delirantes, DROP agitations_agressivite_cris, DROP depression, DROP anxiete, DROP desinhibition, DROP oxygenotherapie, DROP sondes_tracheotomie, DROP lit_medicalise, DROP deambulateur, DROP ureterostomie, DROP dialyse_peritoneale, DROP orthese, DROP prothese, DROP deplacement_interieur, DROP deplacement_exterieur, DROP elimination_fecale, DROP coherence, DROP reeducation, DROP kinesitherapie, DROP autre_reeducation, DROP pancements_ou_sois_cutanes, DROP nom_medcin, DROP prenom_medcin, DROP adresse_medcin, DROP telephone_medcin');
    }
}
