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

namespace Symfony\Component\Cache\Tests\Simple;

use Symfony\Component\Cache\Simple\Psr6Cache;

/**
 * @group legacy
 */
abstract class Psr6CacheTest extends CacheTestCase
{
    protected $skippedTests = [
        'testPrune' => 'Psr6Cache just proxies',
    ];

    public function createSimpleCache($defaultLifetime = 0)
    {
        return new Psr6Cache($this->createCacheItemPool($defaultLifetime));
    }

    abstract protected function createCacheItemPool($defaultLifetime = 0);
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

namespace Symfony\Component\Cache\Tests\Simple;

use Symfony\Component\Cache\Simple\Psr6Cache;

/**
 * @group legacy
 */
abstract class Psr6CacheTest extends CacheTestCase
{
    protected $skippedTests = [
        'testPrune' => 'Psr6Cache just proxies',
    ];

    public function createSimpleCache($defaultLifetime = 0)
    {
        return new Psr6Cache($this->createCacheItemPool($defaultLifetime));
    }

    abstract protected function createCacheItemPool($defaultLifetime = 0);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
