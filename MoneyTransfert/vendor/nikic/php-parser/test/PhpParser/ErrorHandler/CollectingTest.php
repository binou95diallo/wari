<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\ErrorHandler;

use PhpParser\Error;

class CollectingTest extends \PHPUnit\Framework\TestCase
{
    public function testHandleError() {
        $errorHandler = new Collecting();
        $this->assertFalse($errorHandler->hasErrors());
        $this->assertEmpty($errorHandler->getErrors());

        $errorHandler->handleError($e1 = new Error('Test 1'));
        $errorHandler->handleError($e2 = new Error('Test 2'));
        $this->assertTrue($errorHandler->hasErrors());
        $this->assertSame([$e1, $e2], $errorHandler->getErrors());

        $errorHandler->clearErrors();
        $this->assertFalse($errorHandler->hasErrors());
        $this->assertEmpty($errorHandler->getErrors());
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\ErrorHandler;

use PhpParser\Error;

class CollectingTest extends \PHPUnit\Framework\TestCase
{
    public function testHandleError() {
        $errorHandler = new Collecting();
        $this->assertFalse($errorHandler->hasErrors());
        $this->assertEmpty($errorHandler->getErrors());

        $errorHandler->handleError($e1 = new Error('Test 1'));
        $errorHandler->handleError($e2 = new Error('Test 2'));
        $this->assertTrue($errorHandler->hasErrors());
        $this->assertSame([$e1, $e2], $errorHandler->getErrors());

        $errorHandler->clearErrors();
        $this->assertFalse($errorHandler->hasErrors());
        $this->assertEmpty($errorHandler->getErrors());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
