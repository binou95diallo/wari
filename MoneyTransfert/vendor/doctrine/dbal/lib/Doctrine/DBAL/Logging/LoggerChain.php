<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Logging;

/**
 * Chains multiple SQLLogger.
 */
class LoggerChain implements SQLLogger
{
    /** @var SQLLogger[] */
    private $loggers = [];

    /**
     * Adds a logger in the chain.
     *
     * @return void
     */
    public function addLogger(SQLLogger $logger)
    {
        $this->loggers[] = $logger;
    }

    /**
     * {@inheritdoc}
     */
    public function startQuery($sql, ?array $params = null, ?array $types = null)
    {
        foreach ($this->loggers as $logger) {
            $logger->startQuery($sql, $params, $types);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
        foreach ($this->loggers as $logger) {
            $logger->stopQuery();
        }
    }
}
=======
<?php

namespace Doctrine\DBAL\Logging;

/**
 * Chains multiple SQLLogger.
 */
class LoggerChain implements SQLLogger
{
    /** @var SQLLogger[] */
    private $loggers = [];

    /**
     * Adds a logger in the chain.
     *
     * @return void
     */
    public function addLogger(SQLLogger $logger)
    {
        $this->loggers[] = $logger;
    }

    /**
     * {@inheritdoc}
     */
    public function startQuery($sql, ?array $params = null, ?array $types = null)
    {
        foreach ($this->loggers as $logger) {
            $logger->startQuery($sql, $params, $types);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
        foreach ($this->loggers as $logger) {
            $logger->stopQuery();
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
