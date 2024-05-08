<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240418001403 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE medicament DROP FOREIGN KEY FK_538B74BD920C4E9B');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('ALTER TABLE pharmacie MODIFY Id_pharmacie INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON pharmacie');
        $this->addSql('ALTER TABLE pharmacie ADD medicament VARCHAR(200) DEFAULT NULL, DROP Nom, DROP Adresse, DROP Contact, DROP note, CHANGE Id_pharmacie id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE pharmacie ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE medicament (Id_medicament INT AUTO_INCREMENT NOT NULL, Nom VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Description VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Prix VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Id_pharmacie INT DEFAULT NULL, Type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX fk (Id_pharmacie), PRIMARY KEY(Id_medicament)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE medicament ADD CONSTRAINT FK_538B74BD920C4E9B FOREIGN KEY (Id_pharmacie) REFERENCES pharmacie (Id_pharmacie)');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE pharmacie MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON pharmacie');
        $this->addSql('ALTER TABLE pharmacie ADD Nom VARCHAR(200) NOT NULL, ADD Adresse VARCHAR(200) NOT NULL, ADD Contact VARCHAR(200) NOT NULL, ADD note INT NOT NULL, DROP medicament, CHANGE id Id_pharmacie INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE pharmacie ADD PRIMARY KEY (Id_pharmacie)');
    }
}
