<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Services\JWSProvider;

use Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider;
use Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader;

/**
 * Tests the LcobucciJWSProvider.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
final class LcobucciJWSProviderTest extends AbstractJWSProviderTest
{
    public function __construct()
    {
        parent::__construct();

        self::$providerClass  = LcobucciJWSProvider::class;
        self::$keyLoaderClass = RawKeyLoader::class;
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Services\JWSProvider;

use Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider;
use Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader;

/**
 * Tests the LcobucciJWSProvider.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
final class LcobucciJWSProviderTest extends AbstractJWSProviderTest
{
    public function __construct()
    {
        parent::__construct();

        self::$providerClass  = LcobucciJWSProvider::class;
        self::$keyLoaderClass = RawKeyLoader::class;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
