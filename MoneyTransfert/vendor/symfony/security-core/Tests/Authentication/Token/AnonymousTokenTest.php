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
use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;

class AnonymousTokenTest extends TestCase
{
    public function testConstructor()
    {
        $token = new AnonymousToken('foo', 'bar');
        $this->assertTrue($token->isAuthenticated());

        $token = new AnonymousToken('foo', 'bar', ['ROLE_FOO']);
        $this->assertEquals(['ROLE_FOO'], $token->getRoleNames());
    }

    public function testGetKey()
    {
        $token = new AnonymousToken('foo', 'bar');
        $this->assertEquals('foo', $token->getSecret());
    }

    public function testGetCredentials()
    {
        $token = new AnonymousToken('foo', 'bar');
        $this->assertEquals('', $token->getCredentials());
    }

    public function testGetUser()
    {
        $token = new AnonymousToken('foo', 'bar');
        $this->assertEquals('bar', $token->getUser());
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
use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;

class AnonymousTokenTest extends TestCase
{
    public function testConstructor()
    {
        $token = new AnonymousToken('foo', 'bar');
        $this->assertTrue($token->isAuthenticated());

        $token = new AnonymousToken('foo', 'bar', ['ROLE_FOO']);
        $this->assertEquals(['ROLE_FOO'], $token->getRoleNames());
    }

    public function testGetKey()
    {
        $token = new AnonymousToken('foo', 'bar');
        $this->assertEquals('foo', $token->getSecret());
    }

    public function testGetCredentials()
    {
        $token = new AnonymousToken('foo', 'bar');
        $this->assertEquals('', $token->getCredentials());
    }

    public function testGetUser()
    {
        $token = new AnonymousToken('foo', 'bar');
        $this->assertEquals('bar', $token->getUser());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
