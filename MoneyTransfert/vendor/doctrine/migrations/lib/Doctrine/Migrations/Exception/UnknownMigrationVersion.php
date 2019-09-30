<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;
use function sprintf;

final class UnknownMigrationVersion extends RuntimeException implements MigrationException
{
    public static function new(string $version) : self
    {
        return new self(
            sprintf(
                'Could not find migration version %s',
                $version
            ),
            5
        );
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;
use function sprintf;

final class UnknownMigrationVersion extends RuntimeException implements MigrationException
{
    public static function new(string $version) : self
    {
        return new self(
            sprintf(
                'Could not find migration version %s',
                $version
            ),
            5
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
