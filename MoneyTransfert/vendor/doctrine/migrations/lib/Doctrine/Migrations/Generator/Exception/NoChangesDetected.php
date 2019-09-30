<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Generator\Exception;

use RuntimeException;

final class NoChangesDetected extends RuntimeException implements GeneratorException
{
    public static function new() : self
    {
        return new self('No changes detected in your mapping information.');
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Generator\Exception;

use RuntimeException;

final class NoChangesDetected extends RuntimeException implements GeneratorException
{
    public static function new() : self
    {
        return new self('No changes detected in your mapping information.');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
