<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Connection\Loader\Exception;

use InvalidArgumentException;

final class InvalidConfiguration extends InvalidArgumentException implements LoaderException
{
    public static function invalidArrayConfiguration() : self
    {
        return new self('The connection file has to return an array with database configuration parameters.');
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Connection\Loader\Exception;

use InvalidArgumentException;

final class InvalidConfiguration extends InvalidArgumentException implements LoaderException
{
    public static function invalidArrayConfiguration() : self
    {
        return new self('The connection file has to return an array with database configuration parameters.');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
