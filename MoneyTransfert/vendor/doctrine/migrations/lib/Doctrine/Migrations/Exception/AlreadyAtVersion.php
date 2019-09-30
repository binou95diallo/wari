<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;
use function sprintf;

final class AlreadyAtVersion extends RuntimeException implements MigrationException
{
    public static function new(string $version) : self
    {
        return new self(
            sprintf(
                'Database is already at version %s',
                $version
            ),
            6
        );
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;
use function sprintf;

final class AlreadyAtVersion extends RuntimeException implements MigrationException
{
    public static function new(string $version) : self
    {
        return new self(
            sprintf(
                'Database is already at version %s',
                $version
            ),
            6
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
