<<<<<<< HEAD
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/environment.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Environment;

use PHPUnit\Framework\TestCase;

/**
 * @covers \SebastianBergmann\Environment\OperatingSystem
 */
final class OperatingSystemTest extends TestCase
{
    /**
     * @var \SebastianBergmann\Environment\OperatingSystem
     */
    private $os;

    protected function setUp(): void
    {
        $this->os = new OperatingSystem;
    }

    /**
     * @requires OS Linux
     */
    public function testFamilyCanBeRetrieved(): void
    {
        $this->assertEquals('Linux', $this->os->getFamily());
    }

    /**
     * @requires OS Windows
     */
    public function testGetFamilyReturnsWindowsWhenRunningOnWindows(): void
    {
        $this->assertSame('Windows', $this->os->getFamily());
    }

    /**
     * @requires PHP 7.2.0
     */
    public function testGetFamilyReturnsPhpOsFamilyWhenRunningOnPhp72AndGreater(): void
    {
        $this->assertSame(\PHP_OS_FAMILY, $this->os->getFamily());
    }
}
=======
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/environment.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Environment;

use PHPUnit\Framework\TestCase;

/**
 * @covers \SebastianBergmann\Environment\OperatingSystem
 */
final class OperatingSystemTest extends TestCase
{
    /**
     * @var \SebastianBergmann\Environment\OperatingSystem
     */
    private $os;

    protected function setUp(): void
    {
        $this->os = new OperatingSystem;
    }

    /**
     * @requires OS Linux
     */
    public function testFamilyCanBeRetrieved(): void
    {
        $this->assertEquals('Linux', $this->os->getFamily());
    }

    /**
     * @requires OS Windows
     */
    public function testGetFamilyReturnsWindowsWhenRunningOnWindows(): void
    {
        $this->assertSame('Windows', $this->os->getFamily());
    }

    /**
     * @requires PHP 7.2.0
     */
    public function testGetFamilyReturnsPhpOsFamilyWhenRunningOnPhp72AndGreater(): void
    {
        $this->assertSame(\PHP_OS_FAMILY, $this->os->getFamily());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
