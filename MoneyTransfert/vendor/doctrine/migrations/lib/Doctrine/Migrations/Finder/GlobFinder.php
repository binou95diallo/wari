<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Finder;

use function glob;
use function rtrim;

/**
 * The GlobFinder class finds migrations in a directory using the PHP glob() function.
 */
final class GlobFinder extends Finder
{
    /**
     * @return string[]
     */
    public function findMigrations(string $directory, ?string $namespace = null) : array
    {
        $dir = $this->getRealPath($directory);

        $files = glob(rtrim($dir, '/') . '/Version*.php');

        return $this->loadMigrations($files, $namespace);
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Finder;

use function glob;
use function rtrim;

/**
 * The GlobFinder class finds migrations in a directory using the PHP glob() function.
 */
final class GlobFinder extends Finder
{
    /**
     * @return string[]
     */
    public function findMigrations(string $directory, ?string $namespace = null) : array
    {
        $dir = $this->getRealPath($directory);

        $files = glob(rtrim($dir, '/') . '/Version*.php');

        return $this->loadMigrations($files, $namespace);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
