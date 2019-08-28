<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190828103734 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE offre_emplois CHANGE date_limite date_limite DATE NOT NULL, CHANGE mission mission LONGTEXT NOT NULL, CHANGE profil profil LONGTEXT NOT NULL, CHANGE reference reference LONGTEXT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE offre_emplois CHANGE mission mission VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE profil profil VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE reference reference VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE date_limite date_limite DATETIME NOT NULL');
    }
}
