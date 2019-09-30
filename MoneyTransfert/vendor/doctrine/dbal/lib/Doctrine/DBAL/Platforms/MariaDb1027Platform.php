<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Platforms;

use Doctrine\DBAL\Types\Type;

/**
 * Provides the behavior, features and SQL dialect of the MariaDB 10.2 (10.2.7 GA) database platform.
 *
 * Note: Should not be used with versions prior to 10.2.7.
 */
final class MariaDb1027Platform extends MySqlPlatform
{
    /**
     * {@inheritdoc}
     *
     * @link https://mariadb.com/kb/en/library/json-data-type/
     */
    public function getJsonTypeDeclarationSQL(array $field) : string
    {
        return 'LONGTEXT';
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass() : string
    {
        return Keywords\MariaDb102Keywords::class;
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeDoctrineTypeMappings() : void
    {
        parent::initializeDoctrineTypeMappings();

        $this->doctrineTypeMapping['json'] = Type::JSON;
    }
}
=======
<?php

namespace Doctrine\DBAL\Platforms;

use Doctrine\DBAL\Types\Type;

/**
 * Provides the behavior, features and SQL dialect of the MariaDB 10.2 (10.2.7 GA) database platform.
 *
 * Note: Should not be used with versions prior to 10.2.7.
 */
final class MariaDb1027Platform extends MySqlPlatform
{
    /**
     * {@inheritdoc}
     *
     * @link https://mariadb.com/kb/en/library/json-data-type/
     */
    public function getJsonTypeDeclarationSQL(array $field) : string
    {
        return 'LONGTEXT';
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass() : string
    {
        return Keywords\MariaDb102Keywords::class;
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeDoctrineTypeMappings() : void
    {
        parent::initializeDoctrineTypeMappings();

        $this->doctrineTypeMapping['json'] = Type::JSON;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
