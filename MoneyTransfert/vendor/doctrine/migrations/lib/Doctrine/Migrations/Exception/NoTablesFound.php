<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;

final class NoTablesFound extends RuntimeException implements MigrationException
{
    public static function new() : self
    {
        return new self('Your database schema does not contain any tables.');
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Exception;

use RuntimeException;

final class NoTablesFound extends RuntimeException implements MigrationException
{
    public static function new() : self
    {
        return new self('Your database schema does not contain any tables.');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
