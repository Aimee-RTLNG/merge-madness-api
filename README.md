# Symfony 4.4.50 Command Reference

This is a list of commands available in Symfony 4.4.50, a PHP framework for web applications. The commands listed below can be executed via the command-line interface (CLI) using the Symfony Console component.

## Core Commands

These commands are the core commands provided by Symfony framework:

- `console cache:clear`: Clears the cache.
- `console cache:pool:clear`: Clears the cache for a specific cache pool.
- `console debug:autowiring`: Lists classes and their dependencies that can be used for autowiring.
- `console debug:config`: Displays current configuration for an extension.
- `console debug:container`: Displays configured services.
- `console debug:event-dispatcher`: Displays all events registered in the application.
- `console debug:router`: Displays all routes registered in the application.
- `console debug:twig`: Shows a list of all Twig extensions and functions.
- `console lint:container`: Checks the configuration of the services in the container.
- `console lint:twig`: Lints a template and outputs encountered errors.
- `console lint:yaml`: Lints a YAML file and outputs encountered errors.
- `console router:match`: Helps debug routes by simulating a path info match.

## Doctrine Commands

These commands are provided by Doctrine, an object-relational mapper for PHP:

- `console doctrine:cache:clear-metadata`: Clears all metadata cache for an entity manager.
- `console doctrine:cache:clear-query`: Clears all query cache for an entity manager.
- `console doctrine:cache:clear-result`: Clears all result cache for an entity manager.
- `console doctrine:database:create`: Creates the configured database.
- `console doctrine:database:drop`: Drops the configured database.
- `console doctrine:fixtures:load`: Loads database fixtures.


## Serveur local et build

- `symfony server:start --port=8080`