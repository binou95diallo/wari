<<<<<<< HEAD
<?php

namespace Doctrine\DBAL;

use PDO;

/**
 * Contains portable column case conversions.
 */
final class ColumnCase
{
    /**
     * Convert column names to upper case.
     *
     * @see \PDO::CASE_UPPER
     */
    public const UPPER = PDO::CASE_UPPER;

    /**
     * Convert column names to lower case.
     *
     * @see \PDO::CASE_LOWER
     */
    public const LOWER = PDO::CASE_LOWER;

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
=======
<?php

namespace Doctrine\DBAL;

use PDO;

/**
 * Contains portable column case conversions.
 */
final class ColumnCase
{
    /**
     * Convert column names to upper case.
     *
     * @see \PDO::CASE_UPPER
     */
    public const UPPER = PDO::CASE_UPPER;

    /**
     * Convert column names to lower case.
     *
     * @see \PDO::CASE_LOWER
     */
    public const LOWER = PDO::CASE_LOWER;

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
