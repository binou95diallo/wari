<<<<<<< HEAD
<?php
use PHPUnit\Framework\TestCase;

class NamespaceCoverageClassExtendedTest extends TestCase
{
    /**
     * @covers Foo\CoveredClass<extended>
     */
    public function testSomething()
    {
        $o = new Foo\CoveredClass;
        $o->publicMethod();
    }
}
=======
<?php
use PHPUnit\Framework\TestCase;

class NamespaceCoverageClassExtendedTest extends TestCase
{
    /**
     * @covers Foo\CoveredClass<extended>
     */
    public function testSomething()
    {
        $o = new Foo\CoveredClass;
        $o->publicMethod();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
