<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Generator\Exception;

use InvalidArgumentException;
use function sprintf;

final class InvalidTemplateSpecified extends InvalidArgumentException implements GeneratorException
{
    public static function notFoundOrNotReadable(string $path) : self
    {
        return new self(sprintf('The specified template "%s" cannot be found or is not readable.', $path));
    }

    public static function notReadable(string $path) : self
    {
        return new self(sprintf('The specified template "%s" could not be read.', $path));
    }

    public static function empty(string $path) : self
    {
        return new self(sprintf('The specified template "%s" is empty.', $path));
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Generator\Exception;

use InvalidArgumentException;
use function sprintf;

final class InvalidTemplateSpecified extends InvalidArgumentException implements GeneratorException
{
    public static function notFoundOrNotReadable(string $path) : self
    {
        return new self(sprintf('The specified template "%s" cannot be found or is not readable.', $path));
    }

    public static function notReadable(string $path) : self
    {
        return new self(sprintf('The specified template "%s" could not be read.', $path));
    }

    public static function empty(string $path) : self
    {
        return new self(sprintf('The specified template "%s" is empty.', $path));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
