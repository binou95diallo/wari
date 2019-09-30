<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Driver\OCI8;

use Doctrine\DBAL\Driver\AbstractDriverException;

class OCI8Exception extends AbstractDriverException
{
    /**
     * @param mixed[] $error
     *
     * @return \Doctrine\DBAL\Driver\OCI8\OCI8Exception
     */
    public static function fromErrorInfo($error)
    {
        return new self($error['message'], null, $error['code']);
    }
}
=======
<?php

namespace Doctrine\DBAL\Driver\OCI8;

use Doctrine\DBAL\Driver\AbstractDriverException;

class OCI8Exception extends AbstractDriverException
{
    /**
     * @param mixed[] $error
     *
     * @return \Doctrine\DBAL\Driver\OCI8\OCI8Exception
     */
    public static function fromErrorInfo($error)
    {
        return new self($error['message'], null, $error['code']);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
