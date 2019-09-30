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

namespace Symfony\Component\Cache\Tests\Adapter;

use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Adapter\ProxyAdapter;

/**
 * @group time-sensitive
 */
class NamespacedProxyAdapterTest extends ProxyAdapterTest
{
    public function createCachePool($defaultLifetime = 0, $testMethod = null)
    {
        if ('testGetMetadata' === $testMethod) {
            return new ProxyAdapter(new FilesystemAdapter(), 'foo', $defaultLifetime);
        }

        return new ProxyAdapter(new ArrayAdapter($defaultLifetime), 'foo', $defaultLifetime);
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

namespace Symfony\Component\Cache\Tests\Adapter;

use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Adapter\ProxyAdapter;

/**
 * @group time-sensitive
 */
class NamespacedProxyAdapterTest extends ProxyAdapterTest
{
    public function createCachePool($defaultLifetime = 0, $testMethod = null)
    {
        if ('testGetMetadata' === $testMethod) {
            return new ProxyAdapter(new FilesystemAdapter(), 'foo', $defaultLifetime);
        }

        return new ProxyAdapter(new ArrayAdapter($defaultLifetime), 'foo', $defaultLifetime);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
