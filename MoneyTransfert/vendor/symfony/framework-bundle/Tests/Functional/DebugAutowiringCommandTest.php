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

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\ApplicationTester;

/**
 * @group functional
 */
class DebugAutowiringCommandTest extends WebTestCase
{
    public function testBasicFunctionality()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        $application = new Application(static::$kernel);
        $application->setAutoExit(false);

        $tester = new ApplicationTester($application);
        $tester->run(['command' => 'debug:autowiring']);

        $this->assertContains('Symfony\Component\HttpKernel\HttpKernelInterface', $tester->getDisplay());
        $this->assertContains('(http_kernel)', $tester->getDisplay());
    }

    public function testSearchArgument()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        $application = new Application(static::$kernel);
        $application->setAutoExit(false);

        $tester = new ApplicationTester($application);
        $tester->run(['command' => 'debug:autowiring', 'search' => 'kern']);

        $this->assertContains('Symfony\Component\HttpKernel\HttpKernelInterface', $tester->getDisplay());
        $this->assertNotContains('Symfony\Component\Routing\RouterInterface', $tester->getDisplay());
    }

    public function testSearchIgnoreBackslashWhenFindingService()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        $application = new Application(static::$kernel);
        $application->setAutoExit(false);

        $tester = new ApplicationTester($application);
        $tester->run(['command' => 'debug:autowiring', 'search' => 'HttpKernelHttpKernelInterface']);
        $this->assertContains('Symfony\Component\HttpKernel\HttpKernelInterface', $tester->getDisplay());
    }

    public function testSearchNoResults()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        $application = new Application(static::$kernel);
        $application->setAutoExit(false);

        $tester = new ApplicationTester($application);
        $tester->run(['command' => 'debug:autowiring', 'search' => 'foo_fake'], ['capture_stderr_separately' => true]);

        $this->assertContains('No autowirable classes or interfaces found matching "foo_fake"', $tester->getErrorOutput());
        $this->assertEquals(1, $tester->getStatusCode());
    }

    public function testSearchNotAliasedService()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        $application = new Application(static::$kernel);
        $application->setAutoExit(false);

        $tester = new ApplicationTester($application);
        $tester->run(['command' => 'debug:autowiring', 'search' => 'redirect']);

        $this->assertContains(' more concrete service would be displayed when adding the "--all" option.', $tester->getDisplay());
    }

    public function testSearchNotAliasedServiceWithAll()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        $application = new Application(static::$kernel);
        $application->setAutoExit(false);

        $tester = new ApplicationTester($application);
        $tester->run(['command' => 'debug:autowiring', 'search' => 'redirect', '--all' => true]);
        $this->assertContains('Pro-tip: use interfaces in your type-hints instead of classes to benefit from the dependency inversion principle.', $tester->getDisplay());
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

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\ApplicationTester;

/**
 * @group functional
 */
class DebugAutowiringCommandTest extends WebTestCase
{
    public function testBasicFunctionality()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        $application = new Application(static::$kernel);
        $application->setAutoExit(false);

        $tester = new ApplicationTester($application);
        $tester->run(['command' => 'debug:autowiring']);

        $this->assertContains('Symfony\Component\HttpKernel\HttpKernelInterface', $tester->getDisplay());
        $this->assertContains('(http_kernel)', $tester->getDisplay());
    }

    public function testSearchArgument()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        $application = new Application(static::$kernel);
        $application->setAutoExit(false);

        $tester = new ApplicationTester($application);
        $tester->run(['command' => 'debug:autowiring', 'search' => 'kern']);

        $this->assertContains('Symfony\Component\HttpKernel\HttpKernelInterface', $tester->getDisplay());
        $this->assertNotContains('Symfony\Component\Routing\RouterInterface', $tester->getDisplay());
    }

    public function testSearchIgnoreBackslashWhenFindingService()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        $application = new Application(static::$kernel);
        $application->setAutoExit(false);

        $tester = new ApplicationTester($application);
        $tester->run(['command' => 'debug:autowiring', 'search' => 'HttpKernelHttpKernelInterface']);
        $this->assertContains('Symfony\Component\HttpKernel\HttpKernelInterface', $tester->getDisplay());
    }

    public function testSearchNoResults()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        $application = new Application(static::$kernel);
        $application->setAutoExit(false);

        $tester = new ApplicationTester($application);
        $tester->run(['command' => 'debug:autowiring', 'search' => 'foo_fake'], ['capture_stderr_separately' => true]);

        $this->assertContains('No autowirable classes or interfaces found matching "foo_fake"', $tester->getErrorOutput());
        $this->assertEquals(1, $tester->getStatusCode());
    }

    public function testSearchNotAliasedService()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        $application = new Application(static::$kernel);
        $application->setAutoExit(false);

        $tester = new ApplicationTester($application);
        $tester->run(['command' => 'debug:autowiring', 'search' => 'redirect']);

        $this->assertContains(' more concrete service would be displayed when adding the "--all" option.', $tester->getDisplay());
    }

    public function testSearchNotAliasedServiceWithAll()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        $application = new Application(static::$kernel);
        $application->setAutoExit(false);

        $tester = new ApplicationTester($application);
        $tester->run(['command' => 'debug:autowiring', 'search' => 'redirect', '--all' => true]);
        $this->assertContains('Pro-tip: use interfaces in your type-hints instead of classes to benefit from the dependency inversion principle.', $tester->getDisplay());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
