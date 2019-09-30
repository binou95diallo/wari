<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Driver\DrizzlePDOMySql;

use Doctrine\DBAL\Driver\PDOConnection;
use Doctrine\DBAL\ParameterType;

class Connection extends PDOConnection
{
    /**
     * {@inheritdoc}
     */
    public function quote($value, $type = ParameterType::STRING)
    {
        if ($type === ParameterType::BOOLEAN) {
            return $value ? 'true' : 'false';
        }

        return parent::quote($value, $type);
    }
}
=======
<?php

namespace Doctrine\DBAL\Driver\DrizzlePDOMySql;

use Doctrine\DBAL\Driver\PDOConnection;
use Doctrine\DBAL\ParameterType;

class Connection extends PDOConnection
{
    /**
     * {@inheritdoc}
     */
    public function quote($value, $type = ParameterType::STRING)
    {
        if ($type === ParameterType::BOOLEAN) {
            return $value ? 'true' : 'false';
        }

        return parent::quote($value, $type);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
