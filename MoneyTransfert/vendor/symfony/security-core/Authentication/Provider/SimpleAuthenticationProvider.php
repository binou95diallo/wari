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

namespace Symfony\Component\Security\Core\Authentication\Provider;

use Symfony\Component\Security\Core\Authentication\SimpleAuthenticatorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserChecker;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

@trigger_error(sprintf('The "%s" class is deprecated since Symfony 4.2, use Guard instead.', SimpleAuthenticationProvider::class), E_USER_DEPRECATED);

/**
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since Symfony 4.2, use Guard instead.
 */
class SimpleAuthenticationProvider implements AuthenticationProviderInterface
{
    private $simpleAuthenticator;
    private $userProvider;
    private $providerKey;
    private $userChecker;

    public function __construct(SimpleAuthenticatorInterface $simpleAuthenticator, UserProviderInterface $userProvider, string $providerKey, UserCheckerInterface $userChecker = null)
    {
        $this->simpleAuthenticator = $simpleAuthenticator;
        $this->userProvider = $userProvider;
        $this->providerKey = $providerKey;
        $this->userChecker = $userChecker ?: new UserChecker();
    }

    public function authenticate(TokenInterface $token)
    {
        $authToken = $this->simpleAuthenticator->authenticateToken($token, $this->userProvider, $this->providerKey);

        if (!$authToken instanceof TokenInterface) {
            throw new AuthenticationException('Simple authenticator failed to return an authenticated token.');
        }

        $user = $authToken->getUser();

        if (!$user instanceof UserInterface) {
            return $authToken;
        }

        $this->userChecker->checkPreAuth($user);
        $this->userChecker->checkPostAuth($user);

        return $authToken;
    }

    public function supports(TokenInterface $token)
    {
        return $this->simpleAuthenticator->supportsToken($token, $this->providerKey);
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

namespace Symfony\Component\Security\Core\Authentication\Provider;

use Symfony\Component\Security\Core\Authentication\SimpleAuthenticatorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserChecker;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

@trigger_error(sprintf('The "%s" class is deprecated since Symfony 4.2, use Guard instead.', SimpleAuthenticationProvider::class), E_USER_DEPRECATED);

/**
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since Symfony 4.2, use Guard instead.
 */
class SimpleAuthenticationProvider implements AuthenticationProviderInterface
{
    private $simpleAuthenticator;
    private $userProvider;
    private $providerKey;
    private $userChecker;

    public function __construct(SimpleAuthenticatorInterface $simpleAuthenticator, UserProviderInterface $userProvider, string $providerKey, UserCheckerInterface $userChecker = null)
    {
        $this->simpleAuthenticator = $simpleAuthenticator;
        $this->userProvider = $userProvider;
        $this->providerKey = $providerKey;
        $this->userChecker = $userChecker ?: new UserChecker();
    }

    public function authenticate(TokenInterface $token)
    {
        $authToken = $this->simpleAuthenticator->authenticateToken($token, $this->userProvider, $this->providerKey);

        if (!$authToken instanceof TokenInterface) {
            throw new AuthenticationException('Simple authenticator failed to return an authenticated token.');
        }

        $user = $authToken->getUser();

        if (!$user instanceof UserInterface) {
            return $authToken;
        }

        $this->userChecker->checkPreAuth($user);
        $this->userChecker->checkPostAuth($user);

        return $authToken;
    }

    public function supports(TokenInterface $token)
    {
        return $this->simpleAuthenticator->supportsToken($token, $this->providerKey);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
