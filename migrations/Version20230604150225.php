<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230604150225 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create tables for Recipe, Ingredient, Category, Step, and RecipeCategory';
    }

    public function up(Schema $schema): void
    {
        // Create Recipe table
        $this->addSql('CREATE TABLE recipe (
            id INT AUTO_INCREMENT NOT NULL,
            title VARCHAR(255) NOT NULL,
            description TEXT NOT NULL,
            image VARCHAR(255) DEFAULT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME DEFAULT NULL,
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Create Ingredient table
        $this->addSql('CREATE TABLE ingredient (
            id INT AUTO_INCREMENT NOT NULL,
            name VARCHAR(255) NOT NULL,
            quantity VARCHAR(50) NOT NULL,
            unit VARCHAR(50) NOT NULL,
            recipe_id INT DEFAULT NULL,
            PRIMARY KEY(id),
            CONSTRAINT FK_ingredient_recipe FOREIGN KEY (recipe_id) REFERENCES recipe(id) ON DELETE CASCADE
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Create Step table
        $this->addSql('CREATE TABLE step (
            id INT AUTO_INCREMENT NOT NULL,
            description TEXT NOT NULL,
            recipe_id INT DEFAULT NULL,
            PRIMARY KEY(id),
            CONSTRAINT FK_step_recipe FOREIGN KEY (recipe_id) REFERENCES recipe(id) ON DELETE CASCADE
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Create Category table
        $this->addSql('CREATE TABLE category (
            id INT AUTO_INCREMENT NOT NULL,
            name VARCHAR(255) NOT NULL,
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Create RecipeCategory table
        $this->addSql('CREATE TABLE recipe_category (
            recipe_id INT NOT NULL,
            category_id INT NOT NULL,
            INDEX IDX_recipe_category_recipe (recipe_id),
            INDEX IDX_recipe_category_category (category_id),
            PRIMARY KEY(recipe_id, category_id),
            CONSTRAINT FK_recipe_category_recipe FOREIGN KEY (recipe_id) REFERENCES recipe(id) ON DELETE CASCADE,
            CONSTRAINT FK_recipe_category_category FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // Drop the tables if needed
        $this->addSql('DROP TABLE recipe_category');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE step');
        $this->addSql('DROP TABLE ingredient');
        $this->addSql('DROP TABLE recipe');
    }
}
