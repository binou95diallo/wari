<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Event;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\TableDiff;
use function array_merge;
use function is_array;

/**
 * Event Arguments used when SQL queries for removing table columns are generated inside Doctrine\DBAL\Platform\*Platform.
 */
class SchemaAlterTableRemoveColumnEventArgs extends SchemaEventArgs
{
    /** @var Column */
    private $column;

    /** @var TableDiff */
    private $tableDiff;

    /** @var AbstractPlatform */
    private $platform;

    /** @var string[] */
    private $sql = [];

    public function __construct(Column $column, TableDiff $tableDiff, AbstractPlatform $platform)
    {
        $this->column    = $column;
        $this->tableDiff = $tableDiff;
        $this->platform  = $platform;
    }

    /**
     * @return Column
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * @return TableDiff
     */
    public function getTableDiff()
    {
        return $this->tableDiff;
    }

    /**
     * @return AbstractPlatform
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param string|string[] $sql
     *
     * @return \Doctrine\DBAL\Event\SchemaAlterTableRemoveColumnEventArgs
     */
    public function addSql($sql)
    {
        if (is_array($sql)) {
            $this->sql = array_merge($this->sql, $sql);
        } else {
            $this->sql[] = $sql;
        }

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSql()
    {
        return $this->sql;
    }
}
=======
<?php

namespace Doctrine\DBAL\Event;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\TableDiff;
use function array_merge;
use function is_array;

/**
 * Event Arguments used when SQL queries for removing table columns are generated inside Doctrine\DBAL\Platform\*Platform.
 */
class SchemaAlterTableRemoveColumnEventArgs extends SchemaEventArgs
{
    /** @var Column */
    private $column;

    /** @var TableDiff */
    private $tableDiff;

    /** @var AbstractPlatform */
    private $platform;

    /** @var string[] */
    private $sql = [];

    public function __construct(Column $column, TableDiff $tableDiff, AbstractPlatform $platform)
    {
        $this->column    = $column;
        $this->tableDiff = $tableDiff;
        $this->platform  = $platform;
    }

    /**
     * @return Column
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * @return TableDiff
     */
    public function getTableDiff()
    {
        return $this->tableDiff;
    }

    /**
     * @return AbstractPlatform
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param string|string[] $sql
     *
     * @return \Doctrine\DBAL\Event\SchemaAlterTableRemoveColumnEventArgs
     */
    public function addSql($sql)
    {
        if (is_array($sql)) {
            $this->sql = array_merge($this->sql, $sql);
        } else {
            $this->sql[] = $sql;
        }

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSql()
    {
        return $this->sql;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
