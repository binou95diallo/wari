<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Platforms;

use Doctrine\DBAL\Types\Type;

/**
 * Provides the behavior, features and SQL dialect of the PostgreSQL 9.4 database platform.
 */
class PostgreSQL94Platform extends PostgreSQL92Platform
{
    /**
     * {@inheritdoc}
     */
    public function getJsonTypeDeclarationSQL(array $field)
    {
        if (! empty($field['jsonb'])) {
            return 'JSONB';
        }

        return 'JSON';
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\PostgreSQL94Keywords::class;
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeDoctrineTypeMappings()
    {
        parent::initializeDoctrineTypeMappings();

        $this->doctrineTypeMapping['jsonb'] = Type::JSON;
    }
}
=======
<?php

namespace Doctrine\DBAL\Platforms;

use Doctrine\DBAL\Types\Type;

/**
 * Provides the behavior, features and SQL dialect of the PostgreSQL 9.4 database platform.
 */
class PostgreSQL94Platform extends PostgreSQL92Platform
{
    /**
     * {@inheritdoc}
     */
    public function getJsonTypeDeclarationSQL(array $field)
    {
        if (! empty($field['jsonb'])) {
            return 'JSONB';
        }

        return 'JSON';
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\PostgreSQL94Keywords::class;
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeDoctrineTypeMappings()
    {
        parent::initializeDoctrineTypeMappings();

        $this->doctrineTypeMapping['jsonb'] = Type::JSON;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
