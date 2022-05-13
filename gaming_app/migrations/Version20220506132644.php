<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220506132644 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe CHANGE nom nom_equipe VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE tournois CHANGE nom_tournois nom_tournois VARCHAR(20) NOT NULL, CHANGE recompense recompense VARCHAR(30) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe CHANGE nom_equipe nom VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE tournois CHANGE nom_tournois nom_tournois VARCHAR(20) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE recompense recompense VARCHAR(30) NOT NULL COLLATE `utf8mb4_general_ci`');
    }
}
