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

namespace Symfony\Component\Security\Core\Tests;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\User;

class SecurityTest extends TestCase
{
    public function testGetToken()
    {
        $token = new UsernamePasswordToken('foo', 'bar', 'provider');
        $tokenStorage = $this->getMockBuilder(TokenStorageInterface::class)->getMock();

        $tokenStorage->expects($this->once())
            ->method('getToken')
            ->willReturn($token);

        $container = $this->createContainer('security.token_storage', $tokenStorage);

        $security = new Security($container);
        $this->assertSame($token, $security->getToken());
    }

    /**
     * @dataProvider getUserTests
     */
    public function testGetUser($userInToken, $expectedUser)
    {
        $token = $this->getMockBuilder(TokenInterface::class)->getMock();
        $token->expects($this->any())
            ->method('getUser')
            ->willReturn($userInToken);
        $tokenStorage = $this->getMockBuilder(TokenStorageInterface::class)->getMock();

        $tokenStorage->expects($this->once())
            ->method('getToken')
            ->willReturn($token);

        $container = $this->createContainer('security.token_storage', $tokenStorage);

        $security = new Security($container);
        $this->assertSame($expectedUser, $security->getUser());
    }

    public function getUserTests()
    {
        yield [null, null];

        yield ['string_username', null];

        //yield [new StringishUser(), null]; // 5.0 behavior

        $user = new User('nice_user', 'foo');
        yield [$user, $user];
    }

    /**
     * @group legacy
     * @expectedDeprecation Accessing the user object "Symfony\Component\Security\Core\Tests\StringishUser" that is not an instance of "Symfony\Component\Security\Core\User\UserInterface" from "Symfony\Component\Security\Core\Security::getUser()" is deprecated since Symfony 4.2, use "getToken()->getUser()" instead.
     */
    public function testGetUserLegacy()
    {
        $token = $this->getMockBuilder(TokenInterface::class)->getMock();
        $token->expects($this->any())
            ->method('getUser')
            ->willReturn($user = new StringishUser());
        $tokenStorage = $this->getMockBuilder(TokenStorageInterface::class)->getMock();

        $tokenStorage->expects($this->once())
            ->method('getToken')
            ->willReturn($token);

        $container = $this->createContainer('security.token_storage', $tokenStorage);

        $security = new Security($container);
        $this->assertSame($user, $security->getUser());
    }

    public function testIsGranted()
    {
        $authorizationChecker = $this->getMockBuilder(AuthorizationCheckerInterface::class)->getMock();

        $authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('SOME_ATTRIBUTE', 'SOME_SUBJECT')
            ->willReturn(true);

        $container = $this->createContainer('security.authorization_checker', $authorizationChecker);

        $security = new Security($container);
        $this->assertTrue($security->isGranted('SOME_ATTRIBUTE', 'SOME_SUBJECT'));
    }

    private function createContainer($serviceId, $serviceObject)
    {
        $container = $this->getMockBuilder(ContainerInterface::class)->getMock();

        $container->expects($this->atLeastOnce())
            ->method('get')
            ->with($serviceId)
            ->willReturn($serviceObject);

        return $container;
    }
}

class StringishUser
{
    public function __toString()
    {
        return 'stringish_user';
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

namespace Symfony\Component\Security\Core\Tests;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\User;

class SecurityTest extends TestCase
{
    public function testGetToken()
    {
        $token = new UsernamePasswordToken('foo', 'bar', 'provider');
        $tokenStorage = $this->getMockBuilder(TokenStorageInterface::class)->getMock();

        $tokenStorage->expects($this->once())
            ->method('getToken')
            ->willReturn($token);

        $container = $this->createContainer('security.token_storage', $tokenStorage);

        $security = new Security($container);
        $this->assertSame($token, $security->getToken());
    }

    /**
     * @dataProvider getUserTests
     */
    public function testGetUser($userInToken, $expectedUser)
    {
        $token = $this->getMockBuilder(TokenInterface::class)->getMock();
        $token->expects($this->any())
            ->method('getUser')
            ->willReturn($userInToken);
        $tokenStorage = $this->getMockBuilder(TokenStorageInterface::class)->getMock();

        $tokenStorage->expects($this->once())
            ->method('getToken')
            ->willReturn($token);

        $container = $this->createContainer('security.token_storage', $tokenStorage);

        $security = new Security($container);
        $this->assertSame($expectedUser, $security->getUser());
    }

    public function getUserTests()
    {
        yield [null, null];

        yield ['string_username', null];

        //yield [new StringishUser(), null]; // 5.0 behavior

        $user = new User('nice_user', 'foo');
        yield [$user, $user];
    }

    /**
     * @group legacy
     * @expectedDeprecation Accessing the user object "Symfony\Component\Security\Core\Tests\StringishUser" that is not an instance of "Symfony\Component\Security\Core\User\UserInterface" from "Symfony\Component\Security\Core\Security::getUser()" is deprecated since Symfony 4.2, use "getToken()->getUser()" instead.
     */
    public function testGetUserLegacy()
    {
        $token = $this->getMockBuilder(TokenInterface::class)->getMock();
        $token->expects($this->any())
            ->method('getUser')
            ->willReturn($user = new StringishUser());
        $tokenStorage = $this->getMockBuilder(TokenStorageInterface::class)->getMock();

        $tokenStorage->expects($this->once())
            ->method('getToken')
            ->willReturn($token);

        $container = $this->createContainer('security.token_storage', $tokenStorage);

        $security = new Security($container);
        $this->assertSame($user, $security->getUser());
    }

    public function testIsGranted()
    {
        $authorizationChecker = $this->getMockBuilder(AuthorizationCheckerInterface::class)->getMock();

        $authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('SOME_ATTRIBUTE', 'SOME_SUBJECT')
            ->willReturn(true);

        $container = $this->createContainer('security.authorization_checker', $authorizationChecker);

        $security = new Security($container);
        $this->assertTrue($security->isGranted('SOME_ATTRIBUTE', 'SOME_SUBJECT'));
    }

    private function createContainer($serviceId, $serviceObject)
    {
        $container = $this->getMockBuilder(ContainerInterface::class)->getMock();

        $container->expects($this->atLeastOnce())
            ->method('get')
            ->with($serviceId)
            ->willReturn($serviceObject);

        return $container;
    }
}

class StringishUser
{
    public function __toString()
    {
        return 'stringish_user';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
