<<<<<<< HEAD
<?php

namespace Doctrine\Bundle\DoctrineBundle\Dbal\Logging;

use Doctrine\DBAL\Logging\DebugStack;

final class BacktraceLogger extends DebugStack
{
    /**
     * {@inheritdoc}
     */
    public function startQuery($sql, ?array $params = null, ?array $types = null) : void
    {
        parent::startQuery($sql, $params, $types);

        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);

        // skip first since it's always the current method
        array_shift($backtrace);

        $this->queries[$this->currentQuery]['backtrace'] = $backtrace;
    }
}
=======
<?php

namespace Doctrine\Bundle\DoctrineBundle\Dbal\Logging;

use Doctrine\DBAL\Logging\DebugStack;

final class BacktraceLogger extends DebugStack
{
    /**
     * {@inheritdoc}
     */
    public function startQuery($sql, ?array $params = null, ?array $types = null) : void
    {
        parent::startQuery($sql, $params, $types);

        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);

        // skip first since it's always the current method
        array_shift($backtrace);

        $this->queries[$this->currentQuery]['backtrace'] = $backtrace;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
