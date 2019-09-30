<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use InvalidArgumentException;

final class FileNotFound extends InvalidArgumentException implements ConfigurationException
{
    public static function new() : self
    {
        return new self('Given config file does not exist');
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use InvalidArgumentException;

final class FileNotFound extends InvalidArgumentException implements ConfigurationException
{
    public static function new() : self
    {
        return new self('Given config file does not exist');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
