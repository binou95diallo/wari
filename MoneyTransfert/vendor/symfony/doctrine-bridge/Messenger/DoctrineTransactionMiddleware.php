<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Messenger;

use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Exception\HandlerFailedException;
use Symfony\Component\Messenger\Exception\UnrecoverableMessageHandlingException;
use Symfony\Component\Messenger\Middleware\MiddlewareInterface;
use Symfony\Component\Messenger\Middleware\StackInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;

/**
 * Wraps all handlers in a single doctrine transaction.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 *
 * @experimental in 4.3
 */
class DoctrineTransactionMiddleware implements MiddlewareInterface
{
    private $managerRegistry;
    private $entityManagerName;

    public function __construct(ManagerRegistry $managerRegistry, string $entityManagerName = null)
    {
        $this->managerRegistry = $managerRegistry;
        $this->entityManagerName = $entityManagerName;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Envelope $envelope, StackInterface $stack): Envelope
    {
        try {
            $entityManager = $this->managerRegistry->getManager($this->entityManagerName);
        } catch (\InvalidArgumentException $e) {
            throw new UnrecoverableMessageHandlingException($e->getMessage(), 0, $e);
        }

        $entityManager->getConnection()->beginTransaction();
        try {
            $envelope = $stack->next()->handle($envelope, $stack);
            $entityManager->flush();
            $entityManager->getConnection()->commit();

            return $envelope;
        } catch (\Throwable $exception) {
            $entityManager->getConnection()->rollBack();

            if ($exception instanceof HandlerFailedException) {
                // Remove all HandledStamp from the envelope so the retry will execute all handlers again.
                // When a handler fails, the queries of allegedly successful previous handlers just got rolled back.
                throw new HandlerFailedException($exception->getEnvelope()->withoutAll(HandledStamp::class), $exception->getNestedExceptions());
            }

            throw $exception;
        }
    }
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Messenger;

use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Exception\HandlerFailedException;
use Symfony\Component\Messenger\Exception\UnrecoverableMessageHandlingException;
use Symfony\Component\Messenger\Middleware\MiddlewareInterface;
use Symfony\Component\Messenger\Middleware\StackInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;

/**
 * Wraps all handlers in a single doctrine transaction.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 *
 * @experimental in 4.3
 */
class DoctrineTransactionMiddleware implements MiddlewareInterface
{
    private $managerRegistry;
    private $entityManagerName;

    public function __construct(ManagerRegistry $managerRegistry, string $entityManagerName = null)
    {
        $this->managerRegistry = $managerRegistry;
        $this->entityManagerName = $entityManagerName;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Envelope $envelope, StackInterface $stack): Envelope
    {
        try {
            $entityManager = $this->managerRegistry->getManager($this->entityManagerName);
        } catch (\InvalidArgumentException $e) {
            throw new UnrecoverableMessageHandlingException($e->getMessage(), 0, $e);
        }

        $entityManager->getConnection()->beginTransaction();
        try {
            $envelope = $stack->next()->handle($envelope, $stack);
            $entityManager->flush();
            $entityManager->getConnection()->commit();

            return $envelope;
        } catch (\Throwable $exception) {
            $entityManager->getConnection()->rollBack();

            if ($exception instanceof HandlerFailedException) {
                // Remove all HandledStamp from the envelope so the retry will execute all handlers again.
                // When a handler fails, the queries of allegedly successful previous handlers just got rolled back.
                throw new HandlerFailedException($exception->getEnvelope()->withoutAll(HandledStamp::class), $exception->getNestedExceptions());
            }

            throw $exception;
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
