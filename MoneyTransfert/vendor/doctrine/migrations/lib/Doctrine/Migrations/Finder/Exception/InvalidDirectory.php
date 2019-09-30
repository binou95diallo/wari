<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Finder\Exception;

use InvalidArgumentException;
use function sprintf;

final class InvalidDirectory extends InvalidArgumentException implements FinderException
{
    public static function new(string $directory) : self
    {
        return new self(sprintf('Cannot load migrations from "%s" because it is not a valid directory', $directory));
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Finder\Exception;

use InvalidArgumentException;
use function sprintf;

final class InvalidDirectory extends InvalidArgumentException implements FinderException
{
    public static function new(string $directory) : self
    {
        return new self(sprintf('Cannot load migrations from "%s" because it is not a valid directory', $directory));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
