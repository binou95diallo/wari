<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190805122412 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE depot_user');
        $this->addSql('ALTER TABLE depot ADD caissier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE depot ADD CONSTRAINT FK_47948BBCB514973B FOREIGN KEY (caissier_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_47948BBCB514973B ON depot (caissier_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE depot_user (depot_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_7AFBBB93A76ED395 (user_id), INDEX IDX_7AFBBB938510D4DE (depot_id), PRIMARY KEY(depot_id, user_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE depot_user ADD CONSTRAINT FK_7AFBBB938510D4DE FOREIGN KEY (depot_id) REFERENCES depot (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE depot_user ADD CONSTRAINT FK_7AFBBB93A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE depot DROP FOREIGN KEY FK_47948BBCB514973B');
        $this->addSql('DROP INDEX IDX_47948BBCB514973B ON depot');
        $this->addSql('ALTER TABLE depot DROP caissier_id');
    }
}
