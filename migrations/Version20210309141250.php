<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210309141250 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comments (id INT AUTO_INCREMENT NOT NULL, recipe_id_id INT NOT NULL, comments_content LONGTEXT NOT NULL, INDEX IDX_5F9E962A69574A48 (recipe_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ingredients (id INT AUTO_INCREMENT NOT NULL, ingredients_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipes (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, recipes_name VARCHAR(255) NOT NULL, recipes_image VARCHAR(255) NOT NULL, recipes_description LONGTEXT NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_A369E2B59D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipes_ingredients (recipes_id INT NOT NULL, ingredients_id INT NOT NULL, INDEX IDX_761206B0FDF2B1FA (recipes_id), INDEX IDX_761206B03EC4DCE (ingredients_id), PRIMARY KEY(recipes_id, ingredients_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE roles (id INT AUTO_INCREMENT NOT NULL, role_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, role_id_id INT DEFAULT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_1483A5E988987678 (role_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A69574A48 FOREIGN KEY (recipe_id_id) REFERENCES recipes (id)');
        $this->addSql('ALTER TABLE recipes ADD CONSTRAINT FK_A369E2B59D86650F FOREIGN KEY (user_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE recipes_ingredients ADD CONSTRAINT FK_761206B0FDF2B1FA FOREIGN KEY (recipes_id) REFERENCES recipes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipes_ingredients ADD CONSTRAINT FK_761206B03EC4DCE FOREIGN KEY (ingredients_id) REFERENCES ingredients (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E988987678 FOREIGN KEY (role_id_id) REFERENCES roles (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recipes_ingredients DROP FOREIGN KEY FK_761206B03EC4DCE');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A69574A48');
        $this->addSql('ALTER TABLE recipes_ingredients DROP FOREIGN KEY FK_761206B0FDF2B1FA');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E988987678');
        $this->addSql('ALTER TABLE recipes DROP FOREIGN KEY FK_A369E2B59D86650F');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE ingredients');
        $this->addSql('DROP TABLE recipes');
        $this->addSql('DROP TABLE recipes_ingredients');
        $this->addSql('DROP TABLE roles');
        $this->addSql('DROP TABLE users');
    }
}
