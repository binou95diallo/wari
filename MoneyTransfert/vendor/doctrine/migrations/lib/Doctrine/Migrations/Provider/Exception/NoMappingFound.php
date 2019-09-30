<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Provider\Exception;

use UnexpectedValueException;

final class NoMappingFound extends UnexpectedValueException implements ProviderException
{
    public static function new() : self
    {
        return new self('No mapping information to process');
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Provider\Exception;

use UnexpectedValueException;

final class NoMappingFound extends UnexpectedValueException implements ProviderException
{
    public static function new() : self
    {
        return new self('No mapping information to process');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
