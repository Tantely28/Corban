<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190906061718 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, offre_emplois_id INT DEFAULT NULL, candidat_id INT DEFAULT NULL, date DATETIME NOT NULL, INDEX IDX_E33BD3B8397AAA76 (offre_emplois_id), INDEX IDX_E33BD3B88D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8397AAA76 FOREIGN KEY (offre_emplois_id) REFERENCES offre_emplois (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B88D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
        $this->addSql('DROP TABLE acces');
        $this->addSql('DROP TABLE accesvideo');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE acces (id INT AUTO_INCREMENT NOT NULL, responsable_id INT DEFAULT NULL, offre_id INT DEFAULT NULL, INDEX IDX_D0F43B1053C59D72 (responsable_id), INDEX IDX_D0F43B104CC8505A (offre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE accesvideo (id INT AUTO_INCREMENT NOT NULL, responsable_id INT DEFAULT NULL, video_id INT DEFAULT NULL, INDEX IDX_8F82C1D53C59D72 (responsable_id), INDEX IDX_8F82C1D29C1004E (video_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B104CC8505A FOREIGN KEY (offre_id) REFERENCES offre_emplois (id)');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B1053C59D72 FOREIGN KEY (responsable_id) REFERENCES responsable (id)');
        $this->addSql('ALTER TABLE accesvideo ADD CONSTRAINT FK_8F82C1D29C1004E FOREIGN KEY (video_id) REFERENCES video (id)');
        $this->addSql('ALTER TABLE accesvideo ADD CONSTRAINT FK_8F82C1D53C59D72 FOREIGN KEY (responsable_id) REFERENCES responsable (id)');
        $this->addSql('DROP TABLE candidature');
    }
}
