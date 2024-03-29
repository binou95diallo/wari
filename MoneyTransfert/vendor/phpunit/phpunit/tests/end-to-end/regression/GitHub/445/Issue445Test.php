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

class Issue445Test extends TestCase
{
    public function testOutputWithExpectationBefore(): void
    {
        $this->expectOutputString('test');
        print 'test';
    }

    public function testOutputWithExpectationAfter(): void
    {
        print 'test';
        $this->expectOutputString('test');
    }

    public function testNotMatchingOutput(): void
    {
        print 'bar';
        $this->expectOutputString('foo');
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

class Issue445Test extends TestCase
{
    public function testOutputWithExpectationBefore(): void
    {
        $this->expectOutputString('test');
        print 'test';
    }

    public function testOutputWithExpectationAfter(): void
    {
        print 'test';
        $this->expectOutputString('test');
    }

    public function testNotMatchingOutput(): void
    {
        print 'bar';
        $this->expectOutputString('foo');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
