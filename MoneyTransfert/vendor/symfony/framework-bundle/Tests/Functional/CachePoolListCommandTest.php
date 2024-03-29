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

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group functional
 */
class CachePoolListCommandTest extends WebTestCase
{
    protected function setUp()
    {
        static::bootKernel(['test_case' => 'CachePools', 'root_config' => 'config.yml']);
    }

    public function testListPools()
    {
        $tester = $this->createCommandTester(['cache.app', 'cache.system']);
        $tester->execute([]);

        $this->assertSame(0, $tester->getStatusCode(), 'cache:pool:list exits with 0 in case of success');
        $this->assertContains('cache.app', $tester->getDisplay());
        $this->assertContains('cache.system', $tester->getDisplay());
    }

    public function testEmptyList()
    {
        $tester = $this->createCommandTester([]);
        $tester->execute([]);

        $this->assertSame(0, $tester->getStatusCode(), 'cache:pool:list exits with 0 in case of success');
    }

    private function createCommandTester(array $poolNames)
    {
        $application = new Application(static::$kernel);
        $application->add(new CachePoolListCommand($poolNames));

        return new CommandTester($application->find('cache:pool:list'));
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

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group functional
 */
class CachePoolListCommandTest extends WebTestCase
{
    protected function setUp()
    {
        static::bootKernel(['test_case' => 'CachePools', 'root_config' => 'config.yml']);
    }

    public function testListPools()
    {
        $tester = $this->createCommandTester(['cache.app', 'cache.system']);
        $tester->execute([]);

        $this->assertSame(0, $tester->getStatusCode(), 'cache:pool:list exits with 0 in case of success');
        $this->assertContains('cache.app', $tester->getDisplay());
        $this->assertContains('cache.system', $tester->getDisplay());
    }

    public function testEmptyList()
    {
        $tester = $this->createCommandTester([]);
        $tester->execute([]);

        $this->assertSame(0, $tester->getStatusCode(), 'cache:pool:list exits with 0 in case of success');
    }

    private function createCommandTester(array $poolNames)
    {
        $application = new Application(static::$kernel);
        $application->add(new CachePoolListCommand($poolNames));

        return new CommandTester($application->find('cache:pool:list'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
