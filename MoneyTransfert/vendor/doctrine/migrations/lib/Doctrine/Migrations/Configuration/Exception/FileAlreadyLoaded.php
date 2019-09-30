<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use LogicException;

final class FileAlreadyLoaded extends LogicException implements ConfigurationException
{
    public static function new() : self
    {
        return new self('Migrations configuration file already loaded', 8);
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use LogicException;

final class FileAlreadyLoaded extends LogicException implements ConfigurationException
{
    public static function new() : self
    {
        return new self('Migrations configuration file already loaded', 8);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
