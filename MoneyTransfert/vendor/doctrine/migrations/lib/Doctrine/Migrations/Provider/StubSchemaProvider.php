<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Provider;

use Doctrine\DBAL\Schema\Schema;

/**
 * The StubSchemaProvider takes a Doctrine\DBAL\Schema\Schema instance through the constructor and returns it
 * from the createSchema() method.
 */
final class StubSchemaProvider implements SchemaProviderInterface
{
    /** @var Schema */
    private $toSchema;

    public function __construct(Schema $schema)
    {
        $this->toSchema = $schema;
    }

    public function createSchema() : Schema
    {
        return $this->toSchema;
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Provider;

use Doctrine\DBAL\Schema\Schema;

/**
 * The StubSchemaProvider takes a Doctrine\DBAL\Schema\Schema instance through the constructor and returns it
 * from the createSchema() method.
 */
final class StubSchemaProvider implements SchemaProviderInterface
{
    /** @var Schema */
    private $toSchema;

    public function __construct(Schema $schema)
    {
        $this->toSchema = $schema;
    }

    public function createSchema() : Schema
    {
        return $this->toSchema;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
