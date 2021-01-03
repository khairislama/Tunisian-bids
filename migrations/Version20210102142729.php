<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210102142729 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(180) NOT NULL, ADD prenom VARCHAR(180) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6496C6E55B5 ON user (nom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649A625945B ON user (prenom)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_8D93D6496C6E55B5 ON user');
        $this->addSql('DROP INDEX UNIQ_8D93D649A625945B ON user');
        $this->addSql('ALTER TABLE user DROP nom, DROP prenom');
    }
}
