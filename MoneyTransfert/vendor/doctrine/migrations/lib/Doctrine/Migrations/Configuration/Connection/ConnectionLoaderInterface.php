<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Connection;

use Doctrine\DBAL\Connection;

/**
 * The ConnectionLoaderInterface defines the interface used to load the Doctrine\DBAL\Connection instance to use
 * for migrations.
 *
 * @internal
 */
interface ConnectionLoaderInterface
{
    /**
     * Read the input and return a Connection, returns null if the config
     * is not supported.
     */
    public function chosen() : ?Connection;
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Connection;

use Doctrine\DBAL\Connection;

/**
 * The ConnectionLoaderInterface defines the interface used to load the Doctrine\DBAL\Connection instance to use
 * for migrations.
 *
 * @internal
 */
interface ConnectionLoaderInterface
{
    /**
     * Read the input and return a Connection, returns null if the config
     * is not supported.
     */
    public function chosen() : ?Connection;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
