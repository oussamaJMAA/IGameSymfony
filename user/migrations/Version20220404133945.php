<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220404133945 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY commande_ibfk_1');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY fk_user');
        $this->addSql('ALTER TABLE commande CHANGE id_cmd id_cmd INT AUTO_INCREMENT NOT NULL, CHANGE idClient idClient INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DA455ACCF FOREIGN KEY (idClient) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DF7384557 FOREIGN KEY (id_produit) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE game CHANGE game_id game_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY fk_id_produit');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2F7384557 FOREIGN KEY (id_produit) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY fk_e');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY fk_t');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F5DA14302 FOREIGN KEY (id_tournois) REFERENCES tournois (id)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F27E0FF8 FOREIGN KEY (id_equipe) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY fk_produit');
        $this->addSql('ALTER TABLE promotion CHANGE id_produit id_produit INT DEFAULT NULL');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1F7384557 FOREIGN KEY (id_produit) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY fk_equipe');
        $this->addSql('ALTER TABLE user CHANGE firstname firstname VARCHAR(255) DEFAULT NULL, CHANGE lastname lastname VARCHAR(255) DEFAULT NULL, CHANGE gender gender VARCHAR(255) DEFAULT NULL, CHANGE role role VARCHAR(255) DEFAULT NULL, CHANGE address address VARCHAR(50) DEFAULT NULL, CHANGE phone phone INT DEFAULT NULL, CHANGE nationality nationality VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6492449BA15 FOREIGN KEY (equipe) REFERENCES equipe (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON user (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DA455ACCF');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DF7384557');
        $this->addSql('ALTER TABLE commande CHANGE id_cmd id_cmd INT NOT NULL, CHANGE idClient idClient INT NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT commande_ibfk_1 FOREIGN KEY (id_produit) REFERENCES produit (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT fk_user FOREIGN KEY (idClient) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE game CHANGE game_id game_id INT NOT NULL');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2F7384557');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT fk_id_produit FOREIGN KEY (id_produit) REFERENCES produit (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F5DA14302');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F27E0FF8');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_e FOREIGN KEY (id_equipe) REFERENCES equipe (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_t FOREIGN KEY (id_tournois) REFERENCES tournois (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1F7384557');
        $this->addSql('ALTER TABLE promotion CHANGE id_produit id_produit INT NOT NULL');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT fk_produit FOREIGN KEY (id_produit) REFERENCES produit (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6492449BA15');
        $this->addSql('DROP INDEX UNIQ_8D93D649F85E0677 ON user');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user CHANGE firstname firstname VARCHAR(255) NOT NULL, CHANGE lastname lastname VARCHAR(255) NOT NULL, CHANGE gender gender VARCHAR(255) NOT NULL, CHANGE role role VARCHAR(255) NOT NULL, CHANGE address address VARCHAR(50) NOT NULL, CHANGE phone phone INT NOT NULL, CHANGE nationality nationality VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT fk_equipe FOREIGN KEY (equipe) REFERENCES equipe (id) ON UPDATE SET NULL ON DELETE SET NULL');
    }
}
