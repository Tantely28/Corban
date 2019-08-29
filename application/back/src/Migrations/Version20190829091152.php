<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190829091152 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE client CHANGE web web VARCHAR(255) DEFAULT NULL, CHANGE secteur secteur VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE cv CHANGE candidat_id candidat_id INT DEFAULT NULL, CHANGE photo photo VARCHAR(255) DEFAULT NULL, CHANGE cv cv VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE offre_emplois ADD client_id INT DEFAULT NULL, CHANGE date_limite date_limite DATE NOT NULL, CHANGE mission mission LONGTEXT NOT NULL, CHANGE profil profil LONGTEXT NOT NULL, CHANGE reference reference LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE offre_emplois ADD CONSTRAINT FK_EAC9079919EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_EAC9079919EB6921 ON offre_emplois (client_id)');
        $this->addSql('ALTER TABLE temoignage CHANGE client_id client_id INT DEFAULT NULL, CHANGE titre titre VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE video CHANGE description description VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE client CHANGE web web VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE secteur secteur VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE cv CHANGE candidat_id candidat_id INT DEFAULT NULL, CHANGE photo photo VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE cv cv VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE offre_emplois DROP FOREIGN KEY FK_EAC9079919EB6921');
        $this->addSql('DROP INDEX IDX_EAC9079919EB6921 ON offre_emplois');
        $this->addSql('ALTER TABLE offre_emplois DROP client_id, CHANGE mission mission VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE profil profil VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE reference reference VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE date_limite date_limite DATETIME NOT NULL');
        $this->addSql('ALTER TABLE temoignage CHANGE client_id client_id INT DEFAULT NULL, CHANGE titre titre VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE video CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
