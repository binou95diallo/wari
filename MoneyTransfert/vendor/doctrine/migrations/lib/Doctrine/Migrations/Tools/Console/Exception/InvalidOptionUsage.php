<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools\Console\Exception;

use InvalidArgumentException;

final class InvalidOptionUsage extends InvalidArgumentException implements ConsoleException
{
    public static function new(string $explanation) : self
    {
        return new self($explanation);
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools\Console\Exception;

use InvalidArgumentException;

final class InvalidOptionUsage extends InvalidArgumentException implements ConsoleException
{
    public static function new(string $explanation) : self
    {
        return new self($explanation);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
