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

namespace Symfony\Component\HttpFoundation\Tests\Session\Storage\Handler;

use Predis\Client;

class PredisClusterSessionHandlerTest extends AbstractRedisSessionHandlerTestCase
{
    protected function createRedisClient(string $host): Client
    {
        return new Client([['host' => $host]]);
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

namespace Symfony\Component\HttpFoundation\Tests\Session\Storage\Handler;

use Predis\Client;

class PredisClusterSessionHandlerTest extends AbstractRedisSessionHandlerTestCase
{
    protected function createRedisClient(string $host): Client
    {
        return new Client([['host' => $host]]);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
