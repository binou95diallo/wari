<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Provider;

use Doctrine\DBAL\Schema\Schema;

/**
 * The SchemaProviderInterface defines the interface used to create a Doctrine\DBAL\Schema\Schema instance that
 * represents the current state of your database.
 */
interface SchemaProviderInterface
{
    public function createSchema() : Schema;
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Provider;

use Doctrine\DBAL\Schema\Schema;

/**
 * The SchemaProviderInterface defines the interface used to create a Doctrine\DBAL\Schema\Schema instance that
 * represents the current state of your database.
 */
interface SchemaProviderInterface
{
    public function createSchema() : Schema;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
