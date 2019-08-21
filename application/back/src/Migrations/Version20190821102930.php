<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190821102930 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE video (id INT AUTO_INCREMENT NOT NULL, candidat_id INT NOT NULL, type VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, video VARCHAR(255) NOT NULL, INDEX IDX_7CC7DA2C8D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C8D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
        $this->addSql('DROP TABLE temoignage_candidat');
        $this->addSql('ALTER TABLE client CHANGE web web VARCHAR(255) DEFAULT NULL, CHANGE secteur secteur VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE temoignage CHANGE client_id client_id INT DEFAULT NULL, CHANGE titre titre VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE temoignage_candidat (id INT AUTO_INCREMENT NOT NULL, candidat_id INT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, video VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_E88CFA718D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE temoignage_candidat ADD CONSTRAINT FK_E88CFA718D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
        $this->addSql('DROP TABLE video');
        $this->addSql('ALTER TABLE client CHANGE web web VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE secteur secteur VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE temoignage CHANGE client_id client_id INT DEFAULT NULL, CHANGE titre titre VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
