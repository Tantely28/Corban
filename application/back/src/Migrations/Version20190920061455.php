<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190920061455 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE acces (id INT AUTO_INCREMENT NOT NULL, proposition_id INT DEFAULT NULL, responsable_id INT DEFAULT NULL, INDEX IDX_D0F43B10DB96F9E (proposition_id), INDEX IDX_D0F43B1053C59D72 (responsable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(100) NOT NULL, password VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidat (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, date_naissance DATE NOT NULL, situation_familier VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, sex VARCHAR(10) NOT NULL, pseudo VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, experience LONGTEXT DEFAULT NULL, competence LONGTEXT DEFAULT NULL, langue LONGTEXT DEFAULT NULL, loisir LONGTEXT DEFAULT NULL, formation LONGTEXT DEFAULT NULL, cv VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, offre_emplois_id INT DEFAULT NULL, candidat_id INT DEFAULT NULL, date DATETIME NOT NULL, cv VARCHAR(255) NOT NULL, lm VARCHAR(255) NOT NULL, INDEX IDX_E33BD3B8397AAA76 (offre_emplois_id), INDEX IDX_E33BD3B88D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, web VARCHAR(255) DEFAULT NULL, secteur VARCHAR(255) DEFAULT NULL, user VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_proposition (id INT AUTO_INCREMENT NOT NULL, proposition_id INT DEFAULT NULL, candidat_id INT DEFAULT NULL, INDEX IDX_A4280364DB96F9E (proposition_id), INDEX IDX_A42803648D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offre_emplois (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, contrat VARCHAR(255) NOT NULL, activite LONGTEXT NOT NULL, mission LONGTEXT NOT NULL, profil LONGTEXT NOT NULL, reference LONGTEXT NOT NULL, date_limite DATE NOT NULL, INDEX IDX_EAC9079919EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proposition (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE responsable (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, pseudo VARCHAR(100) NOT NULL, password VARCHAR(100) NOT NULL, responabilite VARCHAR(100) NOT NULL, INDEX IDX_52520D0719EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE story (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, video VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temoignage (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, video VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_BDADBC4619EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video (id INT AUTO_INCREMENT NOT NULL, candidat_id INT NOT NULL, type VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, video VARCHAR(255) NOT NULL, INDEX IDX_7CC7DA2C8D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B10DB96F9E FOREIGN KEY (proposition_id) REFERENCES proposition (id)');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B1053C59D72 FOREIGN KEY (responsable_id) REFERENCES responsable (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8397AAA76 FOREIGN KEY (offre_emplois_id) REFERENCES offre_emplois (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B88D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
        $this->addSql('ALTER TABLE ligne_proposition ADD CONSTRAINT FK_A4280364DB96F9E FOREIGN KEY (proposition_id) REFERENCES proposition (id)');
        $this->addSql('ALTER TABLE ligne_proposition ADD CONSTRAINT FK_A42803648D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
        $this->addSql('ALTER TABLE offre_emplois ADD CONSTRAINT FK_EAC9079919EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE responsable ADD CONSTRAINT FK_52520D0719EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE temoignage ADD CONSTRAINT FK_BDADBC4619EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C8D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B88D0EB82');
        $this->addSql('ALTER TABLE ligne_proposition DROP FOREIGN KEY FK_A42803648D0EB82');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C8D0EB82');
        $this->addSql('ALTER TABLE offre_emplois DROP FOREIGN KEY FK_EAC9079919EB6921');
        $this->addSql('ALTER TABLE responsable DROP FOREIGN KEY FK_52520D0719EB6921');
        $this->addSql('ALTER TABLE temoignage DROP FOREIGN KEY FK_BDADBC4619EB6921');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B8397AAA76');
        $this->addSql('ALTER TABLE acces DROP FOREIGN KEY FK_D0F43B10DB96F9E');
        $this->addSql('ALTER TABLE ligne_proposition DROP FOREIGN KEY FK_A4280364DB96F9E');
        $this->addSql('ALTER TABLE acces DROP FOREIGN KEY FK_D0F43B1053C59D72');
        $this->addSql('DROP TABLE acces');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE candidat');
        $this->addSql('DROP TABLE candidature');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE ligne_proposition');
        $this->addSql('DROP TABLE offre_emplois');
        $this->addSql('DROP TABLE proposition');
        $this->addSql('DROP TABLE responsable');
        $this->addSql('DROP TABLE story');
        $this->addSql('DROP TABLE temoignage');
        $this->addSql('DROP TABLE video');
    }
}
