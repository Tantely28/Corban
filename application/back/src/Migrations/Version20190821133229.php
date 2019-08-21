<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190821133229 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE offre_emplois (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, date_limite DATETIME NOT NULL, contrat VARCHAR(255) NOT NULL, activite LONGTEXT NOT NULL, mission VARCHAR(255) NOT NULL, profil VARCHAR(255) NOT NULL, reference VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE video CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE client CHANGE web web VARCHAR(255) DEFAULT NULL, CHANGE secteur secteur VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE temoignage CHANGE client_id client_id INT DEFAULT NULL, CHANGE titre titre VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE offre_emplois');
        $this->addSql('ALTER TABLE client CHANGE web web VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE secteur secteur VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE temoignage CHANGE client_id client_id INT DEFAULT NULL, CHANGE titre titre VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE video CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
