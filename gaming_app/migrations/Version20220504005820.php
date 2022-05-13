<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220504005820 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tournois (id INT AUTO_INCREMENT NOT NULL, nom_tournois VARCHAR(20) NOT NULL, capacite INT DEFAULT NULL, recompense VARCHAR(30) NOT NULL, date_tournois DATE DEFAULT NULL, pts_xp INT DEFAULT NULL, time_t TIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournois_equipe (tournois_id INT NOT NULL, equipe_id INT NOT NULL, INDEX IDX_5E5796AC752534C (tournois_id), INDEX IDX_5E5796AC6D861B89 (equipe_id), PRIMARY KEY(tournois_id, equipe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tournois_equipe ADD CONSTRAINT FK_5E5796AC752534C FOREIGN KEY (tournois_id) REFERENCES tournois (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tournois_equipe ADD CONSTRAINT FK_5E5796AC6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F5DA14302 FOREIGN KEY (id_tournois) REFERENCES tournois (id)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F27E0FF8 FOREIGN KEY (id_equipe) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE user CHANGE created_at created_at DATETIME NOT NULL, CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', CHANGE is_verified is_verified TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F5DA14302');
        $this->addSql('ALTER TABLE tournois_equipe DROP FOREIGN KEY FK_5E5796AC752534C');
        $this->addSql('DROP TABLE tournois');
        $this->addSql('DROP TABLE tournois_equipe');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F27E0FF8');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE is_verified is_verified TINYINT(1) DEFAULT NULL');
    }
}
