<<<<<<< HEAD
<?php

namespace Symfony\Component\HttpKernel\Tests\Exception;

use Symfony\Component\HttpKernel\Exception\GoneHttpException;

class GoneHttpExceptionTest extends HttpExceptionTest
{
    protected function createException(string $message = null, \Throwable $previous = null, ?int $code = 0, array $headers = [])
    {
        return new GoneHttpException($message, $previous, $code, $headers);
    }
}
=======
<?php

namespace Symfony\Component\HttpKernel\Tests\Exception;

use Symfony\Component\HttpKernel\Exception\GoneHttpException;

class GoneHttpExceptionTest extends HttpExceptionTest
{
    protected function createException(string $message = null, \Throwable $previous = null, ?int $code = 0, array $headers = [])
    {
        return new GoneHttpException($message, $previous, $code, $headers);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
