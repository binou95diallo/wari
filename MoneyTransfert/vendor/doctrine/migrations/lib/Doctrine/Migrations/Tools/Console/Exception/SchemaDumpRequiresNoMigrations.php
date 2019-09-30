<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools\Console\Exception;

use RuntimeException;

final class SchemaDumpRequiresNoMigrations extends RuntimeException implements ConsoleException
{
    public static function new() : self
    {
        return new self('Delete any previous migrations before dumping your schema.');
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools\Console\Exception;

use RuntimeException;

final class SchemaDumpRequiresNoMigrations extends RuntimeException implements ConsoleException
{
    public static function new() : self
    {
        return new self('Delete any previous migrations before dumping your schema.');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
