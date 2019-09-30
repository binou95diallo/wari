<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Tools\Console\Helper;

use Doctrine\DBAL\Connection;
use Symfony\Component\Console\Helper\Helper;

/**
 * Doctrine CLI Connection Helper.
 */
class ConnectionHelper extends Helper
{
    /**
     * The Doctrine database Connection.
     *
     * @var Connection
     */
    protected $_connection;

    /**
     * @param Connection $connection The Doctrine database Connection.
     */
    public function __construct(Connection $connection)
    {
        $this->_connection = $connection;
    }

    /**
     * Retrieves the Doctrine database Connection.
     *
     * @return Connection
     */
    public function getConnection()
    {
        return $this->_connection;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'connection';
    }
}
=======
<?php

namespace Doctrine\DBAL\Tools\Console\Helper;

use Doctrine\DBAL\Connection;
use Symfony\Component\Console\Helper\Helper;

/**
 * Doctrine CLI Connection Helper.
 */
class ConnectionHelper extends Helper
{
    /**
     * The Doctrine database Connection.
     *
     * @var Connection
     */
    protected $_connection;

    /**
     * @param Connection $connection The Doctrine database Connection.
     */
    public function __construct(Connection $connection)
    {
        $this->_connection = $connection;
    }

    /**
     * Retrieves the Doctrine database Connection.
     *
     * @return Connection
     */
    public function getConnection()
    {
        return $this->_connection;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'connection';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
