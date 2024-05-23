<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240424165610 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, type_evenement_id INT DEFAULT NULL, date_evenement DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', description VARCHAR(255) DEFAULT NULL, INDEX IDX_B26681E88939516 (type_evenement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement_resident (evenement_id INT NOT NULL, resident_id INT NOT NULL, INDEX IDX_926541EEFD02F13 (evenement_id), INDEX IDX_926541EE8012C5B0 (resident_id), PRIMARY KEY(evenement_id, resident_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E88939516 FOREIGN KEY (type_evenement_id) REFERENCES type_evenement (id)');
        $this->addSql('ALTER TABLE evenement_resident ADD CONSTRAINT FK_926541EEFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement_resident ADD CONSTRAINT FK_926541EE8012C5B0 FOREIGN KEY (resident_id) REFERENCES resident (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E88939516');
        $this->addSql('ALTER TABLE evenement_resident DROP FOREIGN KEY FK_926541EEFD02F13');
        $this->addSql('ALTER TABLE evenement_resident DROP FOREIGN KEY FK_926541EE8012C5B0');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE evenement_resident');
    }
}
