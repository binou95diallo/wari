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

use Symfony\Component\Cache\Simple\PdoCache;
use Symfony\Component\Cache\Tests\Traits\PdoPruneableTrait;

/**
 * @group time-sensitive
 * @group legacy
 */
class PdoCacheTest extends CacheTestCase
{
    use PdoPruneableTrait;

    protected static $dbFile;

    public static function setupBeforeClass()
    {
        if (!\extension_loaded('pdo_sqlite')) {
            self::markTestSkipped('Extension pdo_sqlite required.');
        }

        self::$dbFile = tempnam(sys_get_temp_dir(), 'sf_sqlite_cache');

        $pool = new PdoCache('sqlite:'.self::$dbFile);
        $pool->createTable();
    }

    public static function tearDownAfterClass()
    {
        @unlink(self::$dbFile);
    }

    public function createSimpleCache($defaultLifetime = 0)
    {
        return new PdoCache('sqlite:'.self::$dbFile, 'ns', $defaultLifetime);
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

use Symfony\Component\Cache\Simple\PdoCache;
use Symfony\Component\Cache\Tests\Traits\PdoPruneableTrait;

/**
 * @group time-sensitive
 * @group legacy
 */
class PdoCacheTest extends CacheTestCase
{
    use PdoPruneableTrait;

    protected static $dbFile;

    public static function setupBeforeClass()
    {
        if (!\extension_loaded('pdo_sqlite')) {
            self::markTestSkipped('Extension pdo_sqlite required.');
        }

        self::$dbFile = tempnam(sys_get_temp_dir(), 'sf_sqlite_cache');

        $pool = new PdoCache('sqlite:'.self::$dbFile);
        $pool->createTable();
    }

    public static function tearDownAfterClass()
    {
        @unlink(self::$dbFile);
    }

    public function createSimpleCache($defaultLifetime = 0)
    {
        return new PdoCache('sqlite:'.self::$dbFile, 'ns', $defaultLifetime);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
