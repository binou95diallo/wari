<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;
use function sprintf;

final class DuplicateMigrationVersion extends RuntimeException implements MigrationException
{
    public static function new(string $version, string $class) : self
    {
        return new self(
            sprintf(
                'Migration version %s already registered with class %s',
                $version,
                $class
            ),
            7
        );
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;
use function sprintf;

final class DuplicateMigrationVersion extends RuntimeException implements MigrationException
{
    public static function new(string $version, string $class) : self
    {
        return new self(
            sprintf(
                'Migration version %s already registered with class %s',
                $version,
                $class
            ),
            7
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
