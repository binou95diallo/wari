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
use Symfony\Component\Security\Core\Authentication\RememberMe\PersistentToken;

class PersistentTokenTest extends TestCase
{
    public function testConstructor()
    {
        $lastUsed = new \DateTime();
        $token = new PersistentToken('fooclass', 'fooname', 'fooseries', 'footokenvalue', $lastUsed);

        $this->assertEquals('fooclass', $token->getClass());
        $this->assertEquals('fooname', $token->getUsername());
        $this->assertEquals('fooseries', $token->getSeries());
        $this->assertEquals('footokenvalue', $token->getTokenValue());
        $this->assertSame($lastUsed, $token->getLastUsed());
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
use Symfony\Component\Security\Core\Authentication\RememberMe\PersistentToken;

class PersistentTokenTest extends TestCase
{
    public function testConstructor()
    {
        $lastUsed = new \DateTime();
        $token = new PersistentToken('fooclass', 'fooname', 'fooseries', 'footokenvalue', $lastUsed);

        $this->assertEquals('fooclass', $token->getClass());
        $this->assertEquals('fooname', $token->getUsername());
        $this->assertEquals('fooseries', $token->getSeries());
        $this->assertEquals('footokenvalue', $token->getTokenValue());
        $this->assertSame($lastUsed, $token->getLastUsed());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
