<<<<<<< HEAD
<?php

namespace Doctrine\DBAL;

class ConnectionException extends DBALException
{
    /**
     * @return \Doctrine\DBAL\ConnectionException
     */
    public static function commitFailedRollbackOnly()
    {
        return new self('Transaction commit failed because the transaction has been marked for rollback only.');
    }

    /**
     * @return \Doctrine\DBAL\ConnectionException
     */
    public static function noActiveTransaction()
    {
        return new self('There is no active transaction.');
    }

    /**
     * @return \Doctrine\DBAL\ConnectionException
     */
    public static function savepointsNotSupported()
    {
        return new self('Savepoints are not supported by this driver.');
    }

    /**
     * @return \Doctrine\DBAL\ConnectionException
     */
    public static function mayNotAlterNestedTransactionWithSavepointsInTransaction()
    {
        return new self('May not alter the nested transaction with savepoints behavior while a transaction is open.');
    }
}
=======
<?php

namespace Doctrine\DBAL;

class ConnectionException extends DBALException
{
    /**
     * @return \Doctrine\DBAL\ConnectionException
     */
    public static function commitFailedRollbackOnly()
    {
        return new self('Transaction commit failed because the transaction has been marked for rollback only.');
    }

    /**
     * @return \Doctrine\DBAL\ConnectionException
     */
    public static function noActiveTransaction()
    {
        return new self('There is no active transaction.');
    }

    /**
     * @return \Doctrine\DBAL\ConnectionException
     */
    public static function savepointsNotSupported()
    {
        return new self('Savepoints are not supported by this driver.');
    }

    /**
     * @return \Doctrine\DBAL\ConnectionException
     */
    public static function mayNotAlterNestedTransactionWithSavepointsInTransaction()
    {
        return new self('May not alter the nested transaction with savepoints behavior while a transaction is open.');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
