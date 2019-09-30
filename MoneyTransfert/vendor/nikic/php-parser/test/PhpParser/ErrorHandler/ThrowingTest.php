<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\ErrorHandler;

use PhpParser\Error;

class ThrowingTest extends \PHPUnit\Framework\TestCase
{
    public function testHandleError() {
        $this->expectException(Error::class);
        $this->expectExceptionMessage('Test');
        $errorHandler = new Throwing();
        $errorHandler->handleError(new Error('Test'));
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\ErrorHandler;

use PhpParser\Error;

class ThrowingTest extends \PHPUnit\Framework\TestCase
{
    public function testHandleError() {
        $this->expectException(Error::class);
        $this->expectExceptionMessage('Test');
        $errorHandler = new Throwing();
        $errorHandler->handleError(new Error('Test'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
