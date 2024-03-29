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

/**
 * @coversDefaultClass \Foo\CoveredClass
 */
class NamespaceCoverageCoversClassTest extends TestCase
{
    /**
     * @covers ::privateMethod
     * @covers ::protectedMethod
     * @covers ::publicMethod
     * @covers \Foo\CoveredParentClass::privateMethod
     * @covers \Foo\CoveredParentClass::protectedMethod
     * @covers \Foo\CoveredParentClass::publicMethod
     */
    public function testSomething(): void
    {
        $o = new Foo\CoveredClass;
        $o->publicMethod();
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

/**
 * @coversDefaultClass \Foo\CoveredClass
 */
class NamespaceCoverageCoversClassTest extends TestCase
{
    /**
     * @covers ::privateMethod
     * @covers ::protectedMethod
     * @covers ::publicMethod
     * @covers \Foo\CoveredParentClass::privateMethod
     * @covers \Foo\CoveredParentClass::protectedMethod
     * @covers \Foo\CoveredParentClass::publicMethod
     */
    public function testSomething(): void
    {
        $o = new Foo\CoveredClass;
        $o->publicMethod();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
