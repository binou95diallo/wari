<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Exception;

use Doctrine\DBAL\DBALException;

/**
 * Exception to be thrown when invalid arguments are passed to any DBAL API
 */
class InvalidArgumentException extends DBALException
{
    /**
     * @return self
     */
    public static function fromEmptyCriteria()
    {
        return new self('Empty criteria was used, expected non-empty criteria');
    }
}
=======
<?php

namespace Doctrine\DBAL\Exception;

use Doctrine\DBAL\DBALException;

/**
 * Exception to be thrown when invalid arguments are passed to any DBAL API
 */
class InvalidArgumentException extends DBALException
{
    /**
     * @return self
     */
    public static function fromEmptyCriteria()
    {
        return new self('Empty criteria was used, expected non-empty criteria');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
