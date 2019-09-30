<<<<<<< HEAD
<?php
use PHPUnit\Framework\TestCase;

class CoverageNotProtectedTest extends TestCase
{
    /**
     * @covers CoveredClass::<!protected>
     */
    public function testSomething()
    {
        $o = new CoveredClass;
        $o->publicMethod();
    }
}
=======
<?php
use PHPUnit\Framework\TestCase;

class CoverageNotProtectedTest extends TestCase
{
    /**
     * @covers CoveredClass::<!protected>
     */
    public function testSomething()
    {
        $o = new CoveredClass;
        $o->publicMethod();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
