<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use LogicException;

final class MigrationsNamespaceRequired extends LogicException implements ConfigurationException
{
    public static function new() : self
    {
        return new self(
            'Migrations namespace must be configured in order to use Doctrine migrations.',
            2
        );
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use LogicException;

final class MigrationsNamespaceRequired extends LogicException implements ConfigurationException
{
    public static function new() : self
    {
        return new self(
            'Migrations namespace must be configured in order to use Doctrine migrations.',
            2
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
