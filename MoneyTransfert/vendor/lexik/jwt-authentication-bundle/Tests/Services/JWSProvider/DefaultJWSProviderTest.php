<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Services\JWSProvider;

use Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\DefaultJWSProvider;
use Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\KeyLoaderInterface;

/**
 * Tests the DefaultJWSProvider.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 *
 * @group legacy
 */
final class DefaultJWSProviderTest extends AbstractJWSProviderTest
{
    public function __construct()
    {
        parent::__construct();

        self::$providerClass  = DefaultJWSProvider::class;
        self::$keyLoaderClass = KeyLoaderInterface::class;
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Services\JWSProvider;

use Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\DefaultJWSProvider;
use Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\KeyLoaderInterface;

/**
 * Tests the DefaultJWSProvider.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 *
 * @group legacy
 */
final class DefaultJWSProviderTest extends AbstractJWSProviderTest
{
    public function __construct()
    {
        parent::__construct();

        self::$providerClass  = DefaultJWSProvider::class;
        self::$keyLoaderClass = KeyLoaderInterface::class;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
