<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190805120704 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE depot (id INT AUTO_INCREMENT NOT NULL, bank_account_id INT DEFAULT NULL, date_depot DATETIME NOT NULL, montant INT NOT NULL, INDEX IDX_47948BBC12CB990C (bank_account_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE depot_user (depot_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_7AFBBB938510D4DE (depot_id), INDEX IDX_7AFBBB93A76ED395 (user_id), PRIMARY KEY(depot_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE depot ADD CONSTRAINT FK_47948BBC12CB990C FOREIGN KEY (bank_account_id) REFERENCES bank_account (id)');
        $this->addSql('ALTER TABLE depot_user ADD CONSTRAINT FK_7AFBBB938510D4DE FOREIGN KEY (depot_id) REFERENCES depot (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE depot_user ADD CONSTRAINT FK_7AFBBB93A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE depot_user DROP FOREIGN KEY FK_7AFBBB938510D4DE');
        $this->addSql('DROP TABLE depot');
        $this->addSql('DROP TABLE depot_user');
    }
}
