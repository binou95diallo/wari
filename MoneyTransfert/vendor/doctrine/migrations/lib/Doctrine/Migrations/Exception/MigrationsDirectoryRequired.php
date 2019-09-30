<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;

final class MigrationsDirectoryRequired extends RuntimeException implements MigrationException
{
    public static function new() : self
    {
        return new self(
            'Migrations directory must be configured in order to use Doctrine migrations.',
            3
        );
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;

final class MigrationsDirectoryRequired extends RuntimeException implements MigrationException
{
    public static function new() : self
    {
        return new self(
            'Migrations directory must be configured in order to use Doctrine migrations.',
            3
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
