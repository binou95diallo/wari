<<<<<<< HEAD
<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use PHPUnit\Framework\TestCase;

class OutputTestCase extends TestCase
{
    public function testExpectOutputStringFooActualFoo(): void
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectOutputStringFooActualBar(): void
    {
        $this->expectOutputString('foo');
        print 'bar';
    }

    public function testExpectOutputRegexFooActualFoo(): void
    {
        $this->expectOutputRegex('/foo/');
        print 'foo';
    }

    public function testExpectOutputRegexFooActualBar(): void
    {
        $this->expectOutputRegex('/foo/');
        print 'bar';
    }
}
=======
<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use PHPUnit\Framework\TestCase;

class OutputTestCase extends TestCase
{
    public function testExpectOutputStringFooActualFoo(): void
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectOutputStringFooActualBar(): void
    {
        $this->expectOutputString('foo');
        print 'bar';
    }

    public function testExpectOutputRegexFooActualFoo(): void
    {
        $this->expectOutputRegex('/foo/');
        print 'foo';
    }

    public function testExpectOutputRegexFooActualBar(): void
    {
        $this->expectOutputRegex('/foo/');
        print 'bar';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
