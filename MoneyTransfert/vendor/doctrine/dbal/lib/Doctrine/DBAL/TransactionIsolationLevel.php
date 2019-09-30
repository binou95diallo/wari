<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\DBAL;

final class TransactionIsolationLevel
{
    /**
     * Transaction isolation level READ UNCOMMITTED.
     */
    public const READ_UNCOMMITTED = 1;

    /**
     * Transaction isolation level READ COMMITTED.
     */
    public const READ_COMMITTED = 2;

    /**
     * Transaction isolation level REPEATABLE READ.
     */
    public const REPEATABLE_READ = 3;

    /**
     * Transaction isolation level SERIALIZABLE.
     */
    public const SERIALIZABLE = 4;

    private function __construct()
    {
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\DBAL;

final class TransactionIsolationLevel
{
    /**
     * Transaction isolation level READ UNCOMMITTED.
     */
    public const READ_UNCOMMITTED = 1;

    /**
     * Transaction isolation level READ COMMITTED.
     */
    public const READ_COMMITTED = 2;

    /**
     * Transaction isolation level REPEATABLE READ.
     */
    public const REPEATABLE_READ = 3;

    /**
     * Transaction isolation level SERIALIZABLE.
     */
    public const SERIALIZABLE = 4;

    private function __construct()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
