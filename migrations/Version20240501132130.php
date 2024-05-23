<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240501132130 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dossier_medical (id INT AUTO_INCREMENT NOT NULL, resident_id INT DEFAULT NULL, taille VARCHAR(255) NOT NULL, poids VARCHAR(255) NOT NULL, maladies_anciennes VARCHAR(255) NOT NULL, opérations_anciennes VARCHAR(255) DEFAULT NULL, allergies VARCHAR(255) DEFAULT NULL, maladies_actuelles VARCHAR(255) DEFAULT NULL, traitement_en_cours VARCHAR(255) DEFAULT NULL, description_pathologies VARCHAR(500) DEFAULT NULL, hospitalisation_récente TINYINT(1) DEFAULT NULL, cause_hospitalisation_recente VARCHAR(255) DEFAULT NULL, durée_hospitalisation_recente VARCHAR(255) DEFAULT NULL, sortie_hospitalisation_recente VARCHAR(255) DEFAULT NULL, conduite_arisque TINYINT(1) DEFAULT NULL, alcool TINYINT(1) DEFAULT NULL, tabac TINYINT(1) DEFAULT NULL, en_cours_de_sevrage TINYINT(1) DEFAULT NULL, portage_de_bacterie_multiresistante TINYINT(1) DEFAULT NULL, deficiences_sensorielles TINYINT(1) NOT NULL, boolean TINYINT(1) DEFAULT NULL, auditive TINYINT(1) DEFAULT NULL, gustative TINYINT(1) DEFAULT NULL, olfactive TINYINT(1) DEFAULT NULL, vestibulaire TINYINT(1) DEFAULT NULL, tactile TINYINT(1) DEFAULT NULL, idées_délirantes TINYINT(1) DEFAULT NULL, hallucinations TINYINT(1) DEFAULT NULL, agitations_agressivitécris TINYINT(1) DEFAULT NULL, dépression TINYINT(1) DEFAULT NULL, anxiété TINYINT(1) DEFAULT NULL, apathie TINYINT(1) DEFAULT NULL, désinhibition TINYINT(1) DEFAULT NULL, trouble_du_sommeil TINYINT(1) DEFAULT NULL, comportements_moteurs_aberrants TINYINT(1) DEFAULT NULL, oxygénothérapie TINYINT(1) DEFAULT NULL, sondes_alimentaion TINYINT(1) DEFAULT NULL, sondes_trachéotomie TINYINT(1) DEFAULT NULL, sondes_urinaire TINYINT(1) DEFAULT NULL, gastronomie TINYINT(1) DEFAULT NULL, colostomie TINYINT(1) DEFAULT NULL, fauteuil_roulant TINYINT(1) DEFAULT NULL, lit_médicalisé TINYINT(1) DEFAULT NULL, matelas_anti_escarres TINYINT(1) DEFAULT NULL, déambulateur TINYINT(1) DEFAULT NULL, urétérostomie TINYINT(1) DEFAULT NULL, appareillage_ventilatoire TINYINT(1) DEFAULT NULL, pompe TINYINT(1) DEFAULT NULL, chambre_implantable TINYINT(1) DEFAULT NULL, dialyse_péritonéale TINYINT(1) DEFAULT NULL, orthése TINYINT(1) DEFAULT NULL, prothése TINYINT(1) DEFAULT NULL, pace_maker TINYINT(1) DEFAULT NULL, déplacement_intérieur VARCHAR(255) DEFAULT NULL, déplacement_extérieur VARCHAR(255) DEFAULT NULL, toilette_haut VARCHAR(255) DEFAULT NULL, toilette_bas VARCHAR(255) DEFAULT NULL, elimination_urinaire VARCHAR(255) DEFAULT NULL, elimination_fécale VARCHAR(255) DEFAULT NULL, habillage_haut VARCHAR(255) DEFAULT NULL, habillage_moyen VARCHAR(255) DEFAULT NULL, habillage_bas VARCHAR(255) DEFAULT NULL, alimentation_se_servire VARCHAR(255) DEFAULT NULL, alimentation_manger VARCHAR(255) DEFAULT NULL, orientation_temps VARCHAR(255) DEFAULT NULL, orientation_espace VARCHAR(255) DEFAULT NULL, communication_pour_alerter VARCHAR(255) DEFAULT NULL, cohérence VARCHAR(255) DEFAULT NULL, rééducation TINYINT(1) DEFAULT NULL, kinésithérapie TINYINT(1) DEFAULT NULL, orthophonie TINYINT(1) DEFAULT NULL, autre_rééducation VARCHAR(255) DEFAULT NULL, risque_de_chute TINYINT(1) DEFAULT NULL, risque_de_fausse_route TINYINT(1) DEFAULT NULL, soins_palliatifs TINYINT(1) DEFAULT NULL, pancements_ou_sois_cutanès TINYINT(1) DEFAULT NULL, nom_médcin VARCHAR(255) DEFAULT NULL, prenom_médcin VARCHAR(255) DEFAULT NULL, adresse_médcin VARCHAR(255) DEFAULT NULL, téléphone_médcin VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_3581EE628012C5B0 (resident_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dossier_medical ADD CONSTRAINT FK_3581EE628012C5B0 FOREIGN KEY (resident_id) REFERENCES resident (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier_medical DROP FOREIGN KEY FK_3581EE628012C5B0');
        $this->addSql('DROP TABLE dossier_medical');
    }
}
