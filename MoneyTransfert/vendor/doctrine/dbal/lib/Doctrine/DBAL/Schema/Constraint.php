<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Schema;

use Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * Marker interface for constraints.
 */
interface Constraint
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getQuotedName(AbstractPlatform $platform);

    /**
     * Returns the names of the referencing table columns
     * the constraint is associated with.
     *
     * @return string[]
     */
    public function getColumns();

    /**
     * Returns the quoted representation of the column names
     * the constraint is associated with.
     *
     * But only if they were defined with one or a column name
     * is a keyword reserved by the platform.
     * Otherwise the plain unquoted value as inserted is returned.
     *
     * @param AbstractPlatform $platform The platform to use for quotation.
     *
     * @return string[]
     */
    public function getQuotedColumns(AbstractPlatform $platform);
}
=======
<?php

namespace Doctrine\DBAL\Schema;

use Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * Marker interface for constraints.
 */
interface Constraint
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getQuotedName(AbstractPlatform $platform);

    /**
     * Returns the names of the referencing table columns
     * the constraint is associated with.
     *
     * @return string[]
     */
    public function getColumns();

    /**
     * Returns the quoted representation of the column names
     * the constraint is associated with.
     *
     * But only if they were defined with one or a column name
     * is a keyword reserved by the platform.
     * Otherwise the plain unquoted value as inserted is returned.
     *
     * @param AbstractPlatform $platform The platform to use for quotation.
     *
     * @return string[]
     */
    public function getQuotedColumns(AbstractPlatform $platform);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
