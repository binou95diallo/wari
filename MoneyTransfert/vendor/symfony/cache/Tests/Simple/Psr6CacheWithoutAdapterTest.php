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

use Symfony\Component\Cache\Tests\Fixtures\ExternalAdapter;

/**
 * @group time-sensitive
 * @group legacy
 */
class Psr6CacheWithoutAdapterTest extends Psr6CacheTest
{
    protected function createCacheItemPool($defaultLifetime = 0)
    {
        return new ExternalAdapter($defaultLifetime);
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

namespace Symfony\Component\Cache\Tests\Simple;

use Symfony\Component\Cache\Tests\Fixtures\ExternalAdapter;

/**
 * @group time-sensitive
 * @group legacy
 */
class Psr6CacheWithoutAdapterTest extends Psr6CacheTest
{
    protected function createCacheItemPool($defaultLifetime = 0)
    {
        return new ExternalAdapter($defaultLifetime);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
