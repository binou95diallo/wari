<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;
use function sprintf;

final class MigrationNotConvertibleToSql extends RuntimeException implements MigrationException
{
    public static function new(string $migrationClass) : self
    {
        return new self(
            sprintf(
                'Migration class "%s" contains a prepared statement. Unfortunately there is no cross platform way '
                . 'of outputing it as an sql string. Do you want to write a PR for it?',
                $migrationClass
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

final class MigrationNotConvertibleToSql extends RuntimeException implements MigrationException
{
    public static function new(string $migrationClass) : self
    {
        return new self(
            sprintf(
                'Migration class "%s" contains a prepared statement. Unfortunately there is no cross platform way '
                . 'of outputing it as an sql string. Do you want to write a PR for it?',
                $migrationClass
            )
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
