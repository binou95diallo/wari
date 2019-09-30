<<<<<<< HEAD
<?php

namespace Doctrine\DBAL;

/**
 * Contains all DBAL LockModes.
 */
class LockMode
{
    public const NONE              = 0;
    public const OPTIMISTIC        = 1;
    public const PESSIMISTIC_READ  = 2;
    public const PESSIMISTIC_WRITE = 4;

    /**
     * Private constructor. This class cannot be instantiated.
     */
    final private function __construct()
    {
    }
}
=======
<?php

namespace Doctrine\DBAL;

/**
 * Contains all DBAL LockModes.
 */
class LockMode
{
    public const NONE              = 0;
    public const OPTIMISTIC        = 1;
    public const PESSIMISTIC_READ  = 2;
    public const PESSIMISTIC_WRITE = 4;

    /**
     * Private constructor. This class cannot be instantiated.
     */
    final private function __construct()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
