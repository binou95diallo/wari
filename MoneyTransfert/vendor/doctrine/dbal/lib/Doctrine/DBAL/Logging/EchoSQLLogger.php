<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Logging;

use const PHP_EOL;
use function var_dump;

/**
 * A SQL logger that logs to the standard output using echo/var_dump.
 */
class EchoSQLLogger implements SQLLogger
{
    /**
     * {@inheritdoc}
     */
    public function startQuery($sql, ?array $params = null, ?array $types = null)
    {
        echo $sql . PHP_EOL;

        if ($params) {
            var_dump($params);
        }

        if (! $types) {
            return;
        }

        var_dump($types);
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
    }
}
=======
<?php

namespace Doctrine\DBAL\Logging;

use const PHP_EOL;
use function var_dump;

/**
 * A SQL logger that logs to the standard output using echo/var_dump.
 */
class EchoSQLLogger implements SQLLogger
{
    /**
     * {@inheritdoc}
     */
    public function startQuery($sql, ?array $params = null, ?array $types = null)
    {
        echo $sql . PHP_EOL;

        if ($params) {
            var_dump($params);
        }

        if (! $types) {
            return;
        }

        var_dump($types);
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
