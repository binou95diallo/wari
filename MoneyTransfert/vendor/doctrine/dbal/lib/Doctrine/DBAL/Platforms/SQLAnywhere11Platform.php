<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Platforms;

/**
 * The SQLAnywhere11Platform provides the behavior, features and SQL dialect of the
 * SAP Sybase SQL Anywhere 11 database platform.
 */
class SQLAnywhere11Platform extends SQLAnywherePlatform
{
    /**
     * {@inheritdoc}
     */
    public function getRegexpExpression()
    {
        return 'REGEXP';
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\SQLAnywhere11Keywords::class;
    }
}
=======
<?php

namespace Doctrine\DBAL\Platforms;

/**
 * The SQLAnywhere11Platform provides the behavior, features and SQL dialect of the
 * SAP Sybase SQL Anywhere 11 database platform.
 */
class SQLAnywhere11Platform extends SQLAnywherePlatform
{
    /**
     * {@inheritdoc}
     */
    public function getRegexpExpression()
    {
        return 'REGEXP';
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\SQLAnywhere11Keywords::class;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
