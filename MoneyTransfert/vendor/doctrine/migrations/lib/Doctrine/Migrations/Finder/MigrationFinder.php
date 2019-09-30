<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Finder;

/**
 * The MigrationFinder interface defines the interface used for finding migrations in a given directory and namespace.
 */
interface MigrationFinder
{
    /**
     * @param string      $directory The directory which the finder should search
     * @param string|null $namespace If not null only classes in this namespace will be returned
     *
     * @return string[]
     */
    public function findMigrations(string $directory, ?string $namespace = null) : array;
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Finder;

/**
 * The MigrationFinder interface defines the interface used for finding migrations in a given directory and namespace.
 */
interface MigrationFinder
{
    /**
     * @param string      $directory The directory which the finder should search
     * @param string|null $namespace If not null only classes in this namespace will be returned
     *
     * @return string[]
     */
    public function findMigrations(string $directory, ?string $namespace = null) : array;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
