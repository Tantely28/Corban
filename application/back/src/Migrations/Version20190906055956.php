<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190906055956 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE acces');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE acces (id INT AUTO_INCREMENT NOT NULL, responsable_id INT DEFAULT NULL, offre_id INT DEFAULT NULL, INDEX IDX_D0F43B1053C59D72 (responsable_id), INDEX IDX_D0F43B104CC8505A (offre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B104CC8505A FOREIGN KEY (offre_id) REFERENCES offre_emplois (id)');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B1053C59D72 FOREIGN KEY (responsable_id) REFERENCES responsable (id)');
    }
}
