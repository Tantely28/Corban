<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190903114119 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE cv');
        $this->addSql('ALTER TABLE candidat ADD photo VARCHAR(255) DEFAULT NULL, ADD experience LONGTEXT DEFAULT NULL, ADD competence LONGTEXT DEFAULT NULL, ADD langue LONGTEXT DEFAULT NULL, ADD loisir LONGTEXT DEFAULT NULL, ADD formation LONGTEXT DEFAULT NULL, ADD cv VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cv (id INT AUTO_INCREMENT NOT NULL, candidat_id INT DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, cv VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, formation LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, experience LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, competence LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, langue LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, loisir LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, UNIQUE INDEX UNIQ_B66FFE928D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE cv ADD CONSTRAINT FK_B66FFE928D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
        $this->addSql('ALTER TABLE candidat DROP photo, DROP experience, DROP competence, DROP langue, DROP loisir, DROP formation, DROP cv');
    }
}
