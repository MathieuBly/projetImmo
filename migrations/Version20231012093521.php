<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231012093521 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE annual_cost_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE annuel_sales_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE receipt_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE annual_cost (id INT NOT NULL, biens_id INT DEFAULT NULL, year_ac INT NOT NULL, t_ac DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_9434929F7773350C ON annual_cost (biens_id)');
        $this->addSql('CREATE TABLE annuel_sales (id INT NOT NULL, biens_id INT NOT NULL, year_as INT NOT NULL, t_as INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_3BFC5C5A7773350C ON annuel_sales (biens_id)');
        $this->addSql('CREATE TABLE receipt (id INT NOT NULL, biens_id INT NOT NULL, payements DOUBLE PRECISION NOT NULL, date_payments DATE NOT NULL, type_peyments VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_5399B6457773350C ON receipt (biens_id)');
        $this->addSql('CREATE TABLE users_biens (users_id INT NOT NULL, biens_id INT NOT NULL, PRIMARY KEY(users_id, biens_id))');
        $this->addSql('CREATE INDEX IDX_F8E7A09467B3B43D ON users_biens (users_id)');
        $this->addSql('CREATE INDEX IDX_F8E7A0947773350C ON users_biens (biens_id)');
        $this->addSql('ALTER TABLE annual_cost ADD CONSTRAINT FK_9434929F7773350C FOREIGN KEY (biens_id) REFERENCES biens (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE annuel_sales ADD CONSTRAINT FK_3BFC5C5A7773350C FOREIGN KEY (biens_id) REFERENCES biens (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE receipt ADD CONSTRAINT FK_5399B6457773350C FOREIGN KEY (biens_id) REFERENCES biens (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE users_biens ADD CONSTRAINT FK_F8E7A09467B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE users_biens ADD CONSTRAINT FK_F8E7A0947773350C FOREIGN KEY (biens_id) REFERENCES biens (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE funding ADD biens_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE funding ADD date_cost DATE NOT NULL');
        $this->addSql('ALTER TABLE funding ADD CONSTRAINT FK_D30DD1D67773350C FOREIGN KEY (biens_id) REFERENCES biens (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_D30DD1D67773350C ON funding (biens_id)');
        $this->addSql('ALTER TABLE location ADD resident_id INT NOT NULL');
        $this->addSql('ALTER TABLE location ADD biens_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE location ADD prix DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE location ADD CONSTRAINT FK_5E9E89CB8012C5B0 FOREIGN KEY (resident_id) REFERENCES resident (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE location ADD CONSTRAINT FK_5E9E89CB7773350C FOREIGN KEY (biens_id) REFERENCES biens (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_5E9E89CB8012C5B0 ON location (resident_id)');
        $this->addSql('CREATE INDEX IDX_5E9E89CB7773350C ON location (biens_id)');
        $this->addSql('ALTER TABLE resident ADD date_naiss DATE NOT NULL');
        $this->addSql('ALTER TABLE resident ADD ville_naiss VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE resident ADD situation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE resident ADD nb_enfant INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE annual_cost_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE annuel_sales_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE receipt_id_seq CASCADE');
        $this->addSql('ALTER TABLE annual_cost DROP CONSTRAINT FK_9434929F7773350C');
        $this->addSql('ALTER TABLE annuel_sales DROP CONSTRAINT FK_3BFC5C5A7773350C');
        $this->addSql('ALTER TABLE receipt DROP CONSTRAINT FK_5399B6457773350C');
        $this->addSql('ALTER TABLE users_biens DROP CONSTRAINT FK_F8E7A09467B3B43D');
        $this->addSql('ALTER TABLE users_biens DROP CONSTRAINT FK_F8E7A0947773350C');
        $this->addSql('DROP TABLE annual_cost');
        $this->addSql('DROP TABLE annuel_sales');
        $this->addSql('DROP TABLE receipt');
        $this->addSql('DROP TABLE users_biens');
        $this->addSql('ALTER TABLE funding DROP CONSTRAINT FK_D30DD1D67773350C');
        $this->addSql('DROP INDEX IDX_D30DD1D67773350C');
        $this->addSql('ALTER TABLE funding DROP biens_id');
        $this->addSql('ALTER TABLE funding DROP date_cost');
        $this->addSql('ALTER TABLE location DROP CONSTRAINT FK_5E9E89CB8012C5B0');
        $this->addSql('ALTER TABLE location DROP CONSTRAINT FK_5E9E89CB7773350C');
        $this->addSql('DROP INDEX IDX_5E9E89CB8012C5B0');
        $this->addSql('DROP INDEX IDX_5E9E89CB7773350C');
        $this->addSql('ALTER TABLE location DROP resident_id');
        $this->addSql('ALTER TABLE location DROP biens_id');
        $this->addSql('ALTER TABLE location DROP prix');
        $this->addSql('ALTER TABLE resident DROP date_naiss');
        $this->addSql('ALTER TABLE resident DROP ville_naiss');
        $this->addSql('ALTER TABLE resident DROP situation');
        $this->addSql('ALTER TABLE resident DROP nb_enfant');
    }
}
