<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;

final class RollupFailed extends RuntimeException implements MigrationException
{
    public static function noMigrationsFound() : self
    {
        return new self('No migrations found.');
    }

    public static function tooManyMigrations() : self
    {
        return new self('Too many migrations.');
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;

final class RollupFailed extends RuntimeException implements MigrationException
{
    public static function noMigrationsFound() : self
    {
        return new self('No migrations found.');
    }

    public static function tooManyMigrations() : self
    {
        return new self('Too many migrations.');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
