<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191210211416 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE medecin ADD services_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE medecin ADD CONSTRAINT FK_1BDA53C6AEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id)');
        $this->addSql('CREATE INDEX IDX_1BDA53C6AEF5A6C1 ON medecin (services_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE medecin DROP FOREIGN KEY FK_1BDA53C6AEF5A6C1');
        $this->addSql('DROP INDEX IDX_1BDA53C6AEF5A6C1 ON medecin');
        $this->addSql('ALTER TABLE medecin DROP services_id');
    }
}