<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190906082230 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE responsable (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, pseudo VARCHAR(100) NOT NULL, password VARCHAR(100) NOT NULL, responabilite VARCHAR(100) NOT NULL, INDEX IDX_52520D0719EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE responsable ADD CONSTRAINT FK_52520D0719EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('DROP TABLE cv');
        $this->addSql('ALTER TABLE candidat ADD photo VARCHAR(255) DEFAULT NULL, ADD experience LONGTEXT DEFAULT NULL, ADD competence LONGTEXT DEFAULT NULL, ADD langue LONGTEXT DEFAULT NULL, ADD loisir LONGTEXT DEFAULT NULL, ADD formation LONGTEXT DEFAULT NULL, ADD cv VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE candidature CHANGE offre_emplois_id offre_emplois_id INT DEFAULT NULL, CHANGE candidat_id candidat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client DROP password, CHANGE web web VARCHAR(255) DEFAULT NULL, CHANGE secteur secteur VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE offre_emplois CHANGE client_id client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE temoignage CHANGE client_id client_id INT DEFAULT NULL, CHANGE titre titre VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE video CHANGE description description VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cv (id INT AUTO_INCREMENT NOT NULL, candidat_id INT DEFAULT NULL, photo VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, cv VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, formation LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, experience LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, competence LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, langue LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, loisir LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, UNIQUE INDEX UNIQ_B66FFE928D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE cv ADD CONSTRAINT FK_B66FFE928D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
        $this->addSql('DROP TABLE responsable');
        $this->addSql('ALTER TABLE candidat DROP photo, DROP experience, DROP competence, DROP langue, DROP loisir, DROP formation, DROP cv');
        $this->addSql('ALTER TABLE candidature CHANGE offre_emplois_id offre_emplois_id INT DEFAULT NULL, CHANGE candidat_id candidat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD password VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE web web VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE secteur secteur VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE offre_emplois CHANGE client_id client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE temoignage CHANGE client_id client_id INT DEFAULT NULL, CHANGE titre titre VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE video CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
