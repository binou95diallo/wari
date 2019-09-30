<<<<<<< HEAD
<?php

namespace Symfony\Component\Debug\Tests\Fixtures;

use Symfony\Component\Debug\BufferingLogger;

class LoggerThatSetAnErrorHandler extends BufferingLogger
{
    public function log($level, $message, array $context = [])
    {
        set_error_handler('is_string');
        parent::log($level, $message, $context);
        restore_error_handler();
    }
}
=======
<?php

namespace Symfony\Component\Debug\Tests\Fixtures;

use Symfony\Component\Debug\BufferingLogger;

class LoggerThatSetAnErrorHandler extends BufferingLogger
{
    public function log($level, $message, array $context = [])
    {
        set_error_handler('is_string');
        parent::log($level, $message, $context);
        restore_error_handler();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
