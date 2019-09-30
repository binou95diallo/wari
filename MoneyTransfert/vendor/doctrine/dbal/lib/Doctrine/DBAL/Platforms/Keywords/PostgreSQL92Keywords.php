<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Platforms\Keywords;

use function array_merge;

/**
 * PostgreSQL 9.2 reserved keywords list.
 */
class PostgreSQL92Keywords extends PostgreSQL91Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'PostgreSQL92';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://www.postgresql.org/docs/9.2/static/sql-keywords-appendix.html
     */
    protected function getKeywords()
    {
        return array_merge(parent::getKeywords(), ['COLLATION']);
    }
}
=======
<?php

namespace Doctrine\DBAL\Platforms\Keywords;

use function array_merge;

/**
 * PostgreSQL 9.2 reserved keywords list.
 */
class PostgreSQL92Keywords extends PostgreSQL91Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'PostgreSQL92';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://www.postgresql.org/docs/9.2/static/sql-keywords-appendix.html
     */
    protected function getKeywords()
    {
        return array_merge(parent::getKeywords(), ['COLLATION']);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
