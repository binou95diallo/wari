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

namespace Symfony\Component\Asset\Tests\VersionStrategy;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;

class EmptyVersionStrategyTest extends TestCase
{
    public function testGetVersion()
    {
        $emptyVersionStrategy = new EmptyVersionStrategy();
        $path = 'test-path';

        $this->assertEmpty($emptyVersionStrategy->getVersion($path));
    }

    public function testApplyVersion()
    {
        $emptyVersionStrategy = new EmptyVersionStrategy();
        $path = 'test-path';

        $this->assertEquals($path, $emptyVersionStrategy->applyVersion($path));
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

namespace Symfony\Component\Asset\Tests\VersionStrategy;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;

class EmptyVersionStrategyTest extends TestCase
{
    public function testGetVersion()
    {
        $emptyVersionStrategy = new EmptyVersionStrategy();
        $path = 'test-path';

        $this->assertEmpty($emptyVersionStrategy->getVersion($path));
    }

    public function testApplyVersion()
    {
        $emptyVersionStrategy = new EmptyVersionStrategy();
        $path = 'test-path';

        $this->assertEquals($path, $emptyVersionStrategy->applyVersion($path));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
