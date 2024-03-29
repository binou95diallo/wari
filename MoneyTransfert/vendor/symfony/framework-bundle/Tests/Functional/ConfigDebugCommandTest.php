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
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group functional
 */
class ConfigDebugCommandTest extends WebTestCase
{
    private $application;

    protected function setUp()
    {
        $kernel = static::createKernel(['test_case' => 'ConfigDump', 'root_config' => 'config.yml']);
        $this->application = new Application($kernel);
        $this->application->doRun(new ArrayInput([]), new NullOutput());
    }

    public function testDumpBundleName()
    {
        $tester = $this->createCommandTester();
        $ret = $tester->execute(['name' => 'TestBundle']);

        $this->assertSame(0, $ret, 'Returns 0 in case of success');
        $this->assertContains('custom: foo', $tester->getDisplay());
    }

    public function testDumpBundleOption()
    {
        $tester = $this->createCommandTester();
        $ret = $tester->execute(['name' => 'TestBundle', 'path' => 'custom']);

        $this->assertSame(0, $ret, 'Returns 0 in case of success');
        $this->assertContains('foo', $tester->getDisplay());
    }

    public function testParametersValuesAreResolved()
    {
        $tester = $this->createCommandTester();
        $ret = $tester->execute(['name' => 'framework']);

        $this->assertSame(0, $ret, 'Returns 0 in case of success');
        $this->assertContains("locale: '%env(LOCALE)%'", $tester->getDisplay());
        $this->assertContains('secret: test', $tester->getDisplay());
    }

    public function testDumpUndefinedBundleOption()
    {
        $tester = $this->createCommandTester();
        $tester->execute(['name' => 'TestBundle', 'path' => 'foo']);

        $this->assertContains('Unable to find configuration for "test.foo"', $tester->getDisplay());
    }

    public function testDumpWithPrefixedEnv()
    {
        $tester = $this->createCommandTester();
        $tester->execute(['name' => 'FrameworkBundle']);

        $this->assertContains("cookie_httponly: '%env(bool:COOKIE_HTTPONLY)%'", $tester->getDisplay());
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester()
    {
        $command = $this->application->find('debug:config');

        return new CommandTester($command);
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
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group functional
 */
class ConfigDebugCommandTest extends WebTestCase
{
    private $application;

    protected function setUp()
    {
        $kernel = static::createKernel(['test_case' => 'ConfigDump', 'root_config' => 'config.yml']);
        $this->application = new Application($kernel);
        $this->application->doRun(new ArrayInput([]), new NullOutput());
    }

    public function testDumpBundleName()
    {
        $tester = $this->createCommandTester();
        $ret = $tester->execute(['name' => 'TestBundle']);

        $this->assertSame(0, $ret, 'Returns 0 in case of success');
        $this->assertContains('custom: foo', $tester->getDisplay());
    }

    public function testDumpBundleOption()
    {
        $tester = $this->createCommandTester();
        $ret = $tester->execute(['name' => 'TestBundle', 'path' => 'custom']);

        $this->assertSame(0, $ret, 'Returns 0 in case of success');
        $this->assertContains('foo', $tester->getDisplay());
    }

    public function testParametersValuesAreResolved()
    {
        $tester = $this->createCommandTester();
        $ret = $tester->execute(['name' => 'framework']);

        $this->assertSame(0, $ret, 'Returns 0 in case of success');
        $this->assertContains("locale: '%env(LOCALE)%'", $tester->getDisplay());
        $this->assertContains('secret: test', $tester->getDisplay());
    }

    public function testDumpUndefinedBundleOption()
    {
        $tester = $this->createCommandTester();
        $tester->execute(['name' => 'TestBundle', 'path' => 'foo']);

        $this->assertContains('Unable to find configuration for "test.foo"', $tester->getDisplay());
    }

    public function testDumpWithPrefixedEnv()
    {
        $tester = $this->createCommandTester();
        $tester->execute(['name' => 'FrameworkBundle']);

        $this->assertContains("cookie_httponly: '%env(bool:COOKIE_HTTPONLY)%'", $tester->getDisplay());
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester()
    {
        $command = $this->application->find('debug:config');

        return new CommandTester($command);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
