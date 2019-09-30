<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools\Console\Exception;

use InvalidArgumentException;
use function sprintf;

final class DirectoryDoesNotExist extends InvalidArgumentException implements ConsoleException
{
    public static function new(string $directory) : self
    {
        return new self(sprintf('Migrations directory "%s" does not exist.', $directory));
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools\Console\Exception;

use InvalidArgumentException;
use function sprintf;

final class DirectoryDoesNotExist extends InvalidArgumentException implements ConsoleException
{
    public static function new(string $directory) : self
    {
        return new self(sprintf('Migrations directory "%s" does not exist.', $directory));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
