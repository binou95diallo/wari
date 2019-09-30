<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190906224051 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE expediteur ADD type_piece VARCHAR(255) NOT NULL, CHANGE ncni numero_piece VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE recepteur ADD type_piece VARCHAR(255) NOT NULL, CHANGE ncni_r numero_piece_r VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE expediteur ADD ncni VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP numero_piece, DROP type_piece');
        $this->addSql('ALTER TABLE recepteur ADD ncni_r VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP numero_piece_r, DROP type_piece');
    }
}
