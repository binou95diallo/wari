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

use Symfony\Component\Cache\Simple\ArrayCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class ArrayCacheTest extends CacheTestCase
{
    public function createSimpleCache($defaultLifetime = 0)
    {
        return new ArrayCache($defaultLifetime);
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

use Symfony\Component\Cache\Simple\ArrayCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class ArrayCacheTest extends CacheTestCase
{
    public function createSimpleCache($defaultLifetime = 0)
    {
        return new ArrayCache($defaultLifetime);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
