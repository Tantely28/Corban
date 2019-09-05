<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190905084840 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE acces (id INT AUTO_INCREMENT NOT NULL, responsable_id INT DEFAULT NULL, offre_id INT DEFAULT NULL, INDEX IDX_D0F43B1053C59D72 (responsable_id), INDEX IDX_D0F43B104CC8505A (offre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE accesvideo (id INT AUTO_INCREMENT NOT NULL, responsable_id INT DEFAULT NULL, video_id INT DEFAULT NULL, INDEX IDX_8F82C1D53C59D72 (responsable_id), INDEX IDX_8F82C1D29C1004E (video_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE responsable (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, pseudo VARCHAR(100) NOT NULL, password VARCHAR(100) NOT NULL, responabilite VARCHAR(100) NOT NULL, INDEX IDX_52520D0719EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B1053C59D72 FOREIGN KEY (responsable_id) REFERENCES responsable (id)');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B104CC8505A FOREIGN KEY (offre_id) REFERENCES offre_emplois (id)');
        $this->addSql('ALTER TABLE accesvideo ADD CONSTRAINT FK_8F82C1D53C59D72 FOREIGN KEY (responsable_id) REFERENCES responsable (id)');
        $this->addSql('ALTER TABLE accesvideo ADD CONSTRAINT FK_8F82C1D29C1004E FOREIGN KEY (video_id) REFERENCES video (id)');
        $this->addSql('ALTER TABLE responsable ADD CONSTRAINT FK_52520D0719EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('DROP TABLE cv');
        $this->addSql('ALTER TABLE candidat ADD experience LONGTEXT DEFAULT NULL, ADD competence LONGTEXT DEFAULT NULL, ADD langue LONGTEXT DEFAULT NULL, ADD loisir LONGTEXT DEFAULT NULL, ADD formation LONGTEXT DEFAULT NULL, ADD cv VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE client DROP password');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE acces DROP FOREIGN KEY FK_D0F43B1053C59D72');
        $this->addSql('ALTER TABLE accesvideo DROP FOREIGN KEY FK_8F82C1D53C59D72');
        $this->addSql('CREATE TABLE cv (id INT AUTO_INCREMENT NOT NULL, candidat_id INT DEFAULT NULL, cv VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, formation LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, experience LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, competence LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, langue LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, loisir LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, UNIQUE INDEX UNIQ_B66FFE928D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE cv ADD CONSTRAINT FK_B66FFE928D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
        $this->addSql('DROP TABLE acces');
        $this->addSql('DROP TABLE accesvideo');
        $this->addSql('DROP TABLE responsable');
        $this->addSql('ALTER TABLE candidat DROP experience, DROP competence, DROP langue, DROP loisir, DROP formation, DROP cv');
        $this->addSql('ALTER TABLE client ADD password VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
