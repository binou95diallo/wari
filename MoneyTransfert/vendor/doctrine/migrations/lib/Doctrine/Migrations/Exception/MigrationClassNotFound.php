<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;
use function sprintf;

final class MigrationClassNotFound extends RuntimeException implements MigrationException
{
    public static function new(string $migrationClass, ?string $migrationNamespace) : self
    {
        return new self(
            sprintf(
                'Migration class "%s" was not found. Is it placed in "%s" namespace?',
                $migrationClass,
                $migrationNamespace
            )
        );
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;
use function sprintf;

final class MigrationClassNotFound extends RuntimeException implements MigrationException
{
    public static function new(string $migrationClass, ?string $migrationNamespace) : self
    {
        return new self(
            sprintf(
                'Migration class "%s" was not found. Is it placed in "%s" namespace?',
                $migrationClass,
                $migrationNamespace
            )
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
