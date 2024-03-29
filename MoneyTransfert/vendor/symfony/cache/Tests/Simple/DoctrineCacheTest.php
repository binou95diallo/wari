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

use Symfony\Component\Cache\Simple\DoctrineCache;
use Symfony\Component\Cache\Tests\Fixtures\ArrayCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class DoctrineCacheTest extends CacheTestCase
{
    protected $skippedTests = [
        'testObjectDoesNotChangeInCache' => 'ArrayCache does not use serialize/unserialize',
        'testNotUnserializable' => 'ArrayCache does not use serialize/unserialize',
    ];

    public function createSimpleCache($defaultLifetime = 0)
    {
        return new DoctrineCache(new ArrayCache($defaultLifetime), '', $defaultLifetime);
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

use Symfony\Component\Cache\Simple\DoctrineCache;
use Symfony\Component\Cache\Tests\Fixtures\ArrayCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class DoctrineCacheTest extends CacheTestCase
{
    protected $skippedTests = [
        'testObjectDoesNotChangeInCache' => 'ArrayCache does not use serialize/unserialize',
        'testNotUnserializable' => 'ArrayCache does not use serialize/unserialize',
    ];

    public function createSimpleCache($defaultLifetime = 0)
    {
        return new DoctrineCache(new ArrayCache($defaultLifetime), '', $defaultLifetime);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
