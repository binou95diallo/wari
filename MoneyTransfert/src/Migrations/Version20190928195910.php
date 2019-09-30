<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190928195910 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bank_account (id INT AUTO_INCREMENT NOT NULL, partenaire_id INT NOT NULL, numero_compte VARCHAR(255) NOT NULL, solde INT NOT NULL, nombre_users INT DEFAULT NULL, INDEX IDX_53A23E0A98DE13AC (partenaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE depot (id INT AUTO_INCREMENT NOT NULL, bank_account_id INT DEFAULT NULL, caissier_id INT DEFAULT NULL, date_depot DATETIME DEFAULT NULL, montant INT NOT NULL, INDEX IDX_47948BBC12CB990C (bank_account_id), INDEX IDX_47948BBCB514973B (caissier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE expediteur (id INT AUTO_INCREMENT NOT NULL, nom_complet VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, numero_piece VARCHAR(255) NOT NULL, type_piece VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partenaire (id INT AUTO_INCREMENT NOT NULL, nom_complet VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, ninea VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, raison_social VARCHAR(255) DEFAULT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recepteur (id INT AUTO_INCREMENT NOT NULL, nom_complet_r VARCHAR(255) NOT NULL, adresse_r VARCHAR(255) NOT NULL, telephone_r VARCHAR(255) NOT NULL, numero_piece_r VARCHAR(255) DEFAULT NULL, type_piece VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarifs (id INT AUTO_INCREMENT NOT NULL, borne_inferieure INT NOT NULL, borne_superieure INT NOT NULL, valeur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transaction (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, expediteur_id INT DEFAULT NULL, recepteur_id INT DEFAULT NULL, code VARCHAR(255) NOT NULL, date_envoie DATETIME DEFAULT NULL, date_retrait DATETIME DEFAULT NULL, frais INT DEFAULT NULL, montant INT NOT NULL, gain INT DEFAULT NULL, taxe_etat INT DEFAULT NULL, commission_partenaire INT NOT NULL, date_transaction DATETIME NOT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_723705D1A76ED395 (user_id), INDEX IDX_723705D110335F61 (expediteur_id), INDEX IDX_723705D13B49782D (recepteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, partenaire_id INT DEFAULT NULL, bank_account_id INT DEFAULT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, profil VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, nom_complet VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), INDEX IDX_8D93D64998DE13AC (partenaire_id), INDEX IDX_8D93D64912CB990C (bank_account_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bank_account ADD CONSTRAINT FK_53A23E0A98DE13AC FOREIGN KEY (partenaire_id) REFERENCES partenaire (id)');
        $this->addSql('ALTER TABLE depot ADD CONSTRAINT FK_47948BBC12CB990C FOREIGN KEY (bank_account_id) REFERENCES bank_account (id)');
        $this->addSql('ALTER TABLE depot ADD CONSTRAINT FK_47948BBCB514973B FOREIGN KEY (caissier_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D110335F61 FOREIGN KEY (expediteur_id) REFERENCES expediteur (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D13B49782D FOREIGN KEY (recepteur_id) REFERENCES recepteur (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64998DE13AC FOREIGN KEY (partenaire_id) REFERENCES partenaire (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64912CB990C FOREIGN KEY (bank_account_id) REFERENCES bank_account (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE depot DROP FOREIGN KEY FK_47948BBC12CB990C');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64912CB990C');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D110335F61');
        $this->addSql('ALTER TABLE bank_account DROP FOREIGN KEY FK_53A23E0A98DE13AC');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64998DE13AC');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D13B49782D');
        $this->addSql('ALTER TABLE depot DROP FOREIGN KEY FK_47948BBCB514973B');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D1A76ED395');
        $this->addSql('DROP TABLE bank_account');
        $this->addSql('DROP TABLE depot');
        $this->addSql('DROP TABLE expediteur');
        $this->addSql('DROP TABLE partenaire');
        $this->addSql('DROP TABLE recepteur');
        $this->addSql('DROP TABLE tarifs');
        $this->addSql('DROP TABLE transaction');
        $this->addSql('DROP TABLE user');
    }
}
