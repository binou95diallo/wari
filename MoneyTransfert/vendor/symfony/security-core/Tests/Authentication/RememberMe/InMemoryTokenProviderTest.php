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

namespace Symfony\Component\Security\Core\Tests\Authentication\RememberMe;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\RememberMe\InMemoryTokenProvider;
use Symfony\Component\Security\Core\Authentication\RememberMe\PersistentToken;

class InMemoryTokenProviderTest extends TestCase
{
    public function testCreateNewToken()
    {
        $provider = new InMemoryTokenProvider();

        $token = new PersistentToken('foo', 'foo', 'foo', 'foo', new \DateTime());
        $provider->createNewToken($token);

        $this->assertSame($provider->loadTokenBySeries('foo'), $token);
    }

    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\TokenNotFoundException
     */
    public function testLoadTokenBySeriesThrowsNotFoundException()
    {
        $provider = new InMemoryTokenProvider();
        $provider->loadTokenBySeries('foo');
    }

    public function testUpdateToken()
    {
        $provider = new InMemoryTokenProvider();

        $token = new PersistentToken('foo', 'foo', 'foo', 'foo', new \DateTime());
        $provider->createNewToken($token);
        $provider->updateToken('foo', 'newFoo', $lastUsed = new \DateTime());
        $token = $provider->loadTokenBySeries('foo');

        $this->assertEquals('newFoo', $token->getTokenValue());
        $this->assertSame($token->getLastUsed(), $lastUsed);
    }

    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\TokenNotFoundException
     */
    public function testDeleteToken()
    {
        $provider = new InMemoryTokenProvider();

        $token = new PersistentToken('foo', 'foo', 'foo', 'foo', new \DateTime());
        $provider->createNewToken($token);
        $provider->deleteTokenBySeries('foo');
        $provider->loadTokenBySeries('foo');
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

namespace Symfony\Component\Security\Core\Tests\Authentication\RememberMe;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\RememberMe\InMemoryTokenProvider;
use Symfony\Component\Security\Core\Authentication\RememberMe\PersistentToken;

class InMemoryTokenProviderTest extends TestCase
{
    public function testCreateNewToken()
    {
        $provider = new InMemoryTokenProvider();

        $token = new PersistentToken('foo', 'foo', 'foo', 'foo', new \DateTime());
        $provider->createNewToken($token);

        $this->assertSame($provider->loadTokenBySeries('foo'), $token);
    }

    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\TokenNotFoundException
     */
    public function testLoadTokenBySeriesThrowsNotFoundException()
    {
        $provider = new InMemoryTokenProvider();
        $provider->loadTokenBySeries('foo');
    }

    public function testUpdateToken()
    {
        $provider = new InMemoryTokenProvider();

        $token = new PersistentToken('foo', 'foo', 'foo', 'foo', new \DateTime());
        $provider->createNewToken($token);
        $provider->updateToken('foo', 'newFoo', $lastUsed = new \DateTime());
        $token = $provider->loadTokenBySeries('foo');

        $this->assertEquals('newFoo', $token->getTokenValue());
        $this->assertSame($token->getLastUsed(), $lastUsed);
    }

    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\TokenNotFoundException
     */
    public function testDeleteToken()
    {
        $provider = new InMemoryTokenProvider();

        $token = new PersistentToken('foo', 'foo', 'foo', 'foo', new \DateTime());
        $provider->createNewToken($token);
        $provider->deleteTokenBySeries('foo');
        $provider->loadTokenBySeries('foo');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
