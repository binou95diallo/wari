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

namespace Symfony\Component\Security\Core\Tests\Authentication\Provider;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\Provider\SimpleAuthenticationProvider;
use Symfony\Component\Security\Core\Exception\DisabledException;
use Symfony\Component\Security\Core\Exception\LockedException;
use Symfony\Component\Security\Core\User\UserChecker;

/**
 * @group legacy
 */
class SimpleAuthenticationProviderTest extends TestCase
{
    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\DisabledException
     */
    public function testAuthenticateWhenPreChecksFails()
    {
        $user = $this->getMockBuilder('Symfony\Component\Security\Core\User\UserInterface')->getMock();

        $token = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\Token\TokenInterface')->getMock();
        $token->expects($this->any())
            ->method('getUser')
            ->willReturn($user);

        $userChecker = $this->getMockBuilder('Symfony\Component\Security\Core\User\UserCheckerInterface')->getMock();
        $userChecker->expects($this->once())
            ->method('checkPreAuth')
            ->willThrowException(new DisabledException());

        $authenticator = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\SimpleAuthenticatorInterface')->getMock();
        $authenticator->expects($this->once())
            ->method('authenticateToken')
            ->willReturn($token);

        $provider = $this->getProvider($authenticator, null, $userChecker);

        $provider->authenticate($token);
    }

    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\LockedException
     */
    public function testAuthenticateWhenPostChecksFails()
    {
        $user = $this->getMockBuilder('Symfony\Component\Security\Core\User\UserInterface')->getMock();

        $token = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\Token\TokenInterface')->getMock();
        $token->expects($this->any())
            ->method('getUser')
            ->willReturn($user);

        $userChecker = $this->getMockBuilder('Symfony\Component\Security\Core\User\UserCheckerInterface')->getMock();
        $userChecker->expects($this->once())
            ->method('checkPostAuth')
            ->willThrowException(new LockedException());

        $authenticator = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\SimpleAuthenticatorInterface')->getMock();
        $authenticator->expects($this->once())
            ->method('authenticateToken')
            ->willReturn($token);

        $provider = $this->getProvider($authenticator, null, $userChecker);

        $provider->authenticate($token);
    }

    public function testAuthenticateSkipsUserChecksForNonUserInterfaceObjects()
    {
        $token = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\Token\TokenInterface')->getMock();
        $token->expects($this->any())
            ->method('getUser')
            ->willReturn('string-user');
        $authenticator = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\SimpleAuthenticatorInterface')->getMock();
        $authenticator->expects($this->once())
            ->method('authenticateToken')
            ->willReturn($token);

        $this->assertSame($token, $this->getProvider($authenticator, null, new UserChecker())->authenticate($token));
    }

    protected function getProvider($simpleAuthenticator = null, $userProvider = null, $userChecker = null, $key = 'test')
    {
        if (null === $userChecker) {
            $userChecker = $this->getMockBuilder('Symfony\Component\Security\Core\User\UserCheckerInterface')->getMock();
        }
        if (null === $simpleAuthenticator) {
            $simpleAuthenticator = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\SimpleAuthenticatorInterface')->getMock();
        }
        if (null === $userProvider) {
            $userProvider = $this->getMockBuilder('Symfony\Component\Security\Core\User\UserProviderInterface')->getMock();
        }

        return new SimpleAuthenticationProvider($simpleAuthenticator, $userProvider, $key, $userChecker);
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

namespace Symfony\Component\Security\Core\Tests\Authentication\Provider;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\Provider\SimpleAuthenticationProvider;
use Symfony\Component\Security\Core\Exception\DisabledException;
use Symfony\Component\Security\Core\Exception\LockedException;
use Symfony\Component\Security\Core\User\UserChecker;

/**
 * @group legacy
 */
class SimpleAuthenticationProviderTest extends TestCase
{
    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\DisabledException
     */
    public function testAuthenticateWhenPreChecksFails()
    {
        $user = $this->getMockBuilder('Symfony\Component\Security\Core\User\UserInterface')->getMock();

        $token = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\Token\TokenInterface')->getMock();
        $token->expects($this->any())
            ->method('getUser')
            ->willReturn($user);

        $userChecker = $this->getMockBuilder('Symfony\Component\Security\Core\User\UserCheckerInterface')->getMock();
        $userChecker->expects($this->once())
            ->method('checkPreAuth')
            ->willThrowException(new DisabledException());

        $authenticator = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\SimpleAuthenticatorInterface')->getMock();
        $authenticator->expects($this->once())
            ->method('authenticateToken')
            ->willReturn($token);

        $provider = $this->getProvider($authenticator, null, $userChecker);

        $provider->authenticate($token);
    }

    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\LockedException
     */
    public function testAuthenticateWhenPostChecksFails()
    {
        $user = $this->getMockBuilder('Symfony\Component\Security\Core\User\UserInterface')->getMock();

        $token = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\Token\TokenInterface')->getMock();
        $token->expects($this->any())
            ->method('getUser')
            ->willReturn($user);

        $userChecker = $this->getMockBuilder('Symfony\Component\Security\Core\User\UserCheckerInterface')->getMock();
        $userChecker->expects($this->once())
            ->method('checkPostAuth')
            ->willThrowException(new LockedException());

        $authenticator = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\SimpleAuthenticatorInterface')->getMock();
        $authenticator->expects($this->once())
            ->method('authenticateToken')
            ->willReturn($token);

        $provider = $this->getProvider($authenticator, null, $userChecker);

        $provider->authenticate($token);
    }

    public function testAuthenticateSkipsUserChecksForNonUserInterfaceObjects()
    {
        $token = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\Token\TokenInterface')->getMock();
        $token->expects($this->any())
            ->method('getUser')
            ->willReturn('string-user');
        $authenticator = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\SimpleAuthenticatorInterface')->getMock();
        $authenticator->expects($this->once())
            ->method('authenticateToken')
            ->willReturn($token);

        $this->assertSame($token, $this->getProvider($authenticator, null, new UserChecker())->authenticate($token));
    }

    protected function getProvider($simpleAuthenticator = null, $userProvider = null, $userChecker = null, $key = 'test')
    {
        if (null === $userChecker) {
            $userChecker = $this->getMockBuilder('Symfony\Component\Security\Core\User\UserCheckerInterface')->getMock();
        }
        if (null === $simpleAuthenticator) {
            $simpleAuthenticator = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\SimpleAuthenticatorInterface')->getMock();
        }
        if (null === $userProvider) {
            $userProvider = $this->getMockBuilder('Symfony\Component\Security\Core\User\UserProviderInterface')->getMock();
        }

        return new SimpleAuthenticationProvider($simpleAuthenticator, $userProvider, $key, $userChecker);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
