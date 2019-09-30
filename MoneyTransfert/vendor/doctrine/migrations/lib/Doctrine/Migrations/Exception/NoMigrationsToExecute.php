<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;

final class NoMigrationsToExecute extends RuntimeException implements MigrationException
{
    public static function new() : self
    {
        return new self(
            'Could not find any migrations to execute.',
            4
        );
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;

final class NoMigrationsToExecute extends RuntimeException implements MigrationException
{
    public static function new() : self
    {
        return new self(
            'Could not find any migrations to execute.',
            4
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
