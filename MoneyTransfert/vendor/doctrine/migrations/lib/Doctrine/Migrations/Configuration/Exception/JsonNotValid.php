<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use LogicException;

final class JsonNotValid extends LogicException implements ConfigurationException
{
    public static function new() : self
    {
        return new self('Configuration is not valid JSON.', 10);
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use LogicException;

final class JsonNotValid extends LogicException implements ConfigurationException
{
    public static function new() : self
    {
        return new self('Configuration is not valid JSON.', 10);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
