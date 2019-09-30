<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Services\KeyLoader;

use Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader;

/**
 * RawKeyLoaderTest.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class RawKeyLoaderTest extends AbstractTestKeyLoader
{
    public function setUp()
    {
        $this->keyLoader = new RawKeyLoader('private.pem', 'public.pem', 'foobar');

        parent::setup();
    }

    public function testLoadPublicKey()
    {
        $this->assertSame('public.pem', $this->keyLoader->loadKey('public'));
    }

    public function testLoadPrivateKey()
    {
        $this->assertSame('private.pem', $this->keyLoader->loadKey('private'));
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Services\KeyLoader;

use Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader;

/**
 * RawKeyLoaderTest.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class RawKeyLoaderTest extends AbstractTestKeyLoader
{
    public function setUp()
    {
        $this->keyLoader = new RawKeyLoader('private.pem', 'public.pem', 'foobar');

        parent::setup();
    }

    public function testLoadPublicKey()
    {
        $this->assertSame('public.pem', $this->keyLoader->loadKey('public'));
    }

    public function testLoadPrivateKey()
    {
        $this->assertSame('private.pem', $this->keyLoader->loadKey('private'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
