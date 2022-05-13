<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220506162634 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (category_id INT AUTO_INCREMENT NOT NULL, category_name VARCHAR(30) NOT NULL, category_imgUrl VARCHAR(50) NOT NULL, category_addDate VARCHAR(20) NOT NULL, UNIQUE INDEX category_name (category_name), PRIMARY KEY(category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game (game_id INT AUTO_INCREMENT NOT NULL, game_name VARCHAR(30) NOT NULL, category_id INT NOT NULL, game_description VARCHAR(100) NOT NULL, game_link VARCHAR(100) NOT NULL, game_vid VARCHAR(100) NOT NULL, game_addDate VARCHAR(20) NOT NULL, UNIQUE INDEX game_name (game_name), PRIMARY KEY(game_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rating (rating_id INT AUTO_INCREMENT NOT NULL, rating_value INT NOT NULL, PRIMARY KEY(rating_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE game');
        $this->addSql('DROP TABLE rating');
    }
}
