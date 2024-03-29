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

namespace Symfony\Component\Security\Core\Tests\Authentication\Token;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken;

class PreAuthenticatedTokenTest extends TestCase
{
    public function testConstructor()
    {
        $token = new PreAuthenticatedToken('foo', 'bar', 'key');
        $this->assertFalse($token->isAuthenticated());

        $token = new PreAuthenticatedToken('foo', 'bar', 'key', ['ROLE_FOO']);
        $this->assertTrue($token->isAuthenticated());
        $this->assertEquals(['ROLE_FOO'], $token->getRoleNames());
        $this->assertEquals('key', $token->getProviderKey());
    }

    public function testGetCredentials()
    {
        $token = new PreAuthenticatedToken('foo', 'bar', 'key');
        $this->assertEquals('bar', $token->getCredentials());
    }

    public function testGetUser()
    {
        $token = new PreAuthenticatedToken('foo', 'bar', 'key');
        $this->assertEquals('foo', $token->getUser());
    }

    public function testEraseCredentials()
    {
        $token = new PreAuthenticatedToken('foo', 'bar', 'key');
        $token->eraseCredentials();
        $this->assertEquals('', $token->getCredentials());
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

namespace Symfony\Component\Security\Core\Tests\Authentication\Token;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken;

class PreAuthenticatedTokenTest extends TestCase
{
    public function testConstructor()
    {
        $token = new PreAuthenticatedToken('foo', 'bar', 'key');
        $this->assertFalse($token->isAuthenticated());

        $token = new PreAuthenticatedToken('foo', 'bar', 'key', ['ROLE_FOO']);
        $this->assertTrue($token->isAuthenticated());
        $this->assertEquals(['ROLE_FOO'], $token->getRoleNames());
        $this->assertEquals('key', $token->getProviderKey());
    }

    public function testGetCredentials()
    {
        $token = new PreAuthenticatedToken('foo', 'bar', 'key');
        $this->assertEquals('bar', $token->getCredentials());
    }

    public function testGetUser()
    {
        $token = new PreAuthenticatedToken('foo', 'bar', 'key');
        $this->assertEquals('foo', $token->getUser());
    }

    public function testEraseCredentials()
    {
        $token = new PreAuthenticatedToken('foo', 'bar', 'key');
        $token->eraseCredentials();
        $this->assertEquals('', $token->getCredentials());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
