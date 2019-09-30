<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190808114509 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bank_account CHANGE nombre_users nombre_users INT NOT NULL');
        $this->addSql('ALTER TABLE recepteur ADD nom_complet_r VARCHAR(255) NOT NULL, ADD adresse_r VARCHAR(255) NOT NULL, ADD telephone_r VARCHAR(255) NOT NULL, ADD ncni_r VARCHAR(255) NOT NULL, DROP nom_complet, DROP adresse, DROP telephone, DROP ncni');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bank_account CHANGE nombre_users nombre_users INT DEFAULT NULL');
        $this->addSql('ALTER TABLE recepteur ADD nom_complet VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD adresse VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD telephone VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD ncni VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP nom_complet_r, DROP adresse_r, DROP telephone_r, DROP ncni_r');
    }
}
