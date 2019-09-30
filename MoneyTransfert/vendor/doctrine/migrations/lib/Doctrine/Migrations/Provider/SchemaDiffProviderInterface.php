<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Provider;

use Doctrine\DBAL\Schema\Schema;

/**
 * The SchemaDiffProviderInterface defines the interface used to provide the from and to schemas and to produce
 * the SQL queries needed to migrate.
 *
 * @internal
 */
interface SchemaDiffProviderInterface
{
    public function createFromSchema() : Schema;

    public function createToSchema(Schema $fromSchema) : Schema;

    /** @return string[] */
    public function getSqlDiffToMigrate(Schema $fromSchema, Schema $toSchema) : array;
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Provider;

use Doctrine\DBAL\Schema\Schema;

/**
 * The SchemaDiffProviderInterface defines the interface used to provide the from and to schemas and to produce
 * the SQL queries needed to migrate.
 *
 * @internal
 */
interface SchemaDiffProviderInterface
{
    public function createFromSchema() : Schema;

    public function createToSchema(Schema $fromSchema) : Schema;

    /** @return string[] */
    public function getSqlDiffToMigrate(Schema $fromSchema, Schema $toSchema) : array;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
