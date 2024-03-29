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

namespace Symfony\Component\Security\Core\Authentication;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\LegacyEventDispatcherProxy;
use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Core\Event\AuthenticationSuccessEvent;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\ProviderNotFoundException;

/**
 * AuthenticationProviderManager uses a list of AuthenticationProviderInterface
 * instances to authenticate a Token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AuthenticationProviderManager implements AuthenticationManagerInterface
{
    private $providers;
    private $eraseCredentials;
    private $eventDispatcher;

    /**
     * @param iterable|AuthenticationProviderInterface[] $providers        An iterable with AuthenticationProviderInterface instances as values
     * @param bool                                       $eraseCredentials Whether to erase credentials after authentication or not
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(iterable $providers, bool $eraseCredentials = true)
    {
        if (!$providers) {
            throw new \InvalidArgumentException('You must at least add one authentication provider.');
        }

        $this->providers = $providers;
        $this->eraseCredentials = $eraseCredentials;
    }

    /**
     * @final since Symfony 4.3, the type-hint will be updated to the interface from symfony/contracts in 5.0
     */
    public function setEventDispatcher(EventDispatcherInterface $dispatcher)
    {
        $this->eventDispatcher = LegacyEventDispatcherProxy::decorate($dispatcher);
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface $token)
    {
        $lastException = null;
        $result = null;

        foreach ($this->providers as $provider) {
            if (!$provider instanceof AuthenticationProviderInterface) {
                throw new \InvalidArgumentException(sprintf('Provider "%s" must implement the AuthenticationProviderInterface.', \get_class($provider)));
            }

            if (!$provider->supports($token)) {
                continue;
            }

            try {
                $result = $provider->authenticate($token);

                if (null !== $result) {
                    break;
                }
            } catch (AccountStatusException $e) {
                $lastException = $e;

                break;
            } catch (AuthenticationException $e) {
                $lastException = $e;
            }
        }

        if (null !== $result) {
            if (true === $this->eraseCredentials) {
                $result->eraseCredentials();
            }

            if (null !== $this->eventDispatcher) {
                $this->eventDispatcher->dispatch(new AuthenticationSuccessEvent($result), AuthenticationEvents::AUTHENTICATION_SUCCESS);
            }

            return $result;
        }

        if (null === $lastException) {
            $lastException = new ProviderNotFoundException(sprintf('No Authentication Provider found for token of class "%s".', \get_class($token)));
        }

        if (null !== $this->eventDispatcher) {
            $this->eventDispatcher->dispatch(new AuthenticationFailureEvent($token, $lastException), AuthenticationEvents::AUTHENTICATION_FAILURE);
        }

        $lastException->setToken($token);

        throw $lastException;
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

namespace Symfony\Component\Security\Core\Authentication;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\LegacyEventDispatcherProxy;
use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Core\Event\AuthenticationSuccessEvent;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\ProviderNotFoundException;

/**
 * AuthenticationProviderManager uses a list of AuthenticationProviderInterface
 * instances to authenticate a Token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AuthenticationProviderManager implements AuthenticationManagerInterface
{
    private $providers;
    private $eraseCredentials;
    private $eventDispatcher;

    /**
     * @param iterable|AuthenticationProviderInterface[] $providers        An iterable with AuthenticationProviderInterface instances as values
     * @param bool                                       $eraseCredentials Whether to erase credentials after authentication or not
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(iterable $providers, bool $eraseCredentials = true)
    {
        if (!$providers) {
            throw new \InvalidArgumentException('You must at least add one authentication provider.');
        }

        $this->providers = $providers;
        $this->eraseCredentials = $eraseCredentials;
    }

    /**
     * @final since Symfony 4.3, the type-hint will be updated to the interface from symfony/contracts in 5.0
     */
    public function setEventDispatcher(EventDispatcherInterface $dispatcher)
    {
        $this->eventDispatcher = LegacyEventDispatcherProxy::decorate($dispatcher);
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface $token)
    {
        $lastException = null;
        $result = null;

        foreach ($this->providers as $provider) {
            if (!$provider instanceof AuthenticationProviderInterface) {
                throw new \InvalidArgumentException(sprintf('Provider "%s" must implement the AuthenticationProviderInterface.', \get_class($provider)));
            }

            if (!$provider->supports($token)) {
                continue;
            }

            try {
                $result = $provider->authenticate($token);

                if (null !== $result) {
                    break;
                }
            } catch (AccountStatusException $e) {
                $lastException = $e;

                break;
            } catch (AuthenticationException $e) {
                $lastException = $e;
            }
        }

        if (null !== $result) {
            if (true === $this->eraseCredentials) {
                $result->eraseCredentials();
            }

            if (null !== $this->eventDispatcher) {
                $this->eventDispatcher->dispatch(new AuthenticationSuccessEvent($result), AuthenticationEvents::AUTHENTICATION_SUCCESS);
            }

            return $result;
        }

        if (null === $lastException) {
            $lastException = new ProviderNotFoundException(sprintf('No Authentication Provider found for token of class "%s".', \get_class($token)));
        }

        if (null !== $this->eventDispatcher) {
            $this->eventDispatcher->dispatch(new AuthenticationFailureEvent($token, $lastException), AuthenticationEvents::AUTHENTICATION_FAILURE);
        }

        $lastException->setToken($token);

        throw $lastException;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
