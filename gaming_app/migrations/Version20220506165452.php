<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220506165452 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (category_id INT AUTO_INCREMENT NOT NULL, category_name VARCHAR(30) NOT NULL, discription VARCHAR(255) NOT NULL, UNIQUE INDEX category_name (category_name), PRIMARY KEY(category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game (game_id INT AUTO_INCREMENT NOT NULL, idcategory INT DEFAULT NULL, game_name VARCHAR(30) NOT NULL, game_description VARCHAR(100) NOT NULL, game_link VARCHAR(100) NOT NULL, game_img VARCHAR(255) NOT NULL, nbr_vu INT DEFAULT NULL, rating INT DEFAULT NULL, INDEX IDX_232B318CAC9951CC (idcategory), UNIQUE INDEX game_name (game_name), PRIMARY KEY(game_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rating (rating_id INT AUTO_INCREMENT NOT NULL, rating_value INT NOT NULL, PRIMARY KEY(rating_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318CAC9951CC FOREIGN KEY (idcategory) REFERENCES category (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318CAC9951CC');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE game');
        $this->addSql('DROP TABLE rating');
    }
}
