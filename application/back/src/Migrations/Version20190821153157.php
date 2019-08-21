<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190821153157 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cv (id INT AUTO_INCREMENT NOT NULL, candidat_id INT DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, cv VARCHAR(255) DEFAULT NULL, formation LONGTEXT DEFAULT NULL, experience LONGTEXT DEFAULT NULL, competence LONGTEXT DEFAULT NULL, langue LONGTEXT DEFAULT NULL, loisir LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_B66FFE928D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cv ADD CONSTRAINT FK_B66FFE928D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
        $this->addSql('ALTER TABLE video CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE client CHANGE web web VARCHAR(255) DEFAULT NULL, CHANGE secteur secteur VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE temoignage CHANGE client_id client_id INT DEFAULT NULL, CHANGE titre titre VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE cv');
        $this->addSql('ALTER TABLE client CHANGE web web VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE secteur secteur VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE temoignage CHANGE client_id client_id INT DEFAULT NULL, CHANGE titre titre VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE video CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
