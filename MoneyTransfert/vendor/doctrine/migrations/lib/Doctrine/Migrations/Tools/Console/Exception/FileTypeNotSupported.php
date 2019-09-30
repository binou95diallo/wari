<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools\Console\Exception;

use InvalidArgumentException;

final class FileTypeNotSupported extends InvalidArgumentException implements ConsoleException
{
    public static function new() : self
    {
        return new self('Given config file type is not supported');
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools\Console\Exception;

use InvalidArgumentException;

final class FileTypeNotSupported extends InvalidArgumentException implements ConsoleException
{
    public static function new() : self
    {
        return new self('Given config file type is not supported');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
