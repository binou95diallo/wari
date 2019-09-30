<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\Exception;

use BadMethodCallException;

/**
 * Exception for forcefully disabled methods
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class DisabledMethodException extends BadMethodCallException implements ExceptionInterface
{
    const NAME = __CLASS__;

    public static function disabledMethod(string $method) : self
    {
        return new self(sprintf('Method "%s" is forcefully disabled', $method));
    }
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\Exception;

use BadMethodCallException;

/**
 * Exception for forcefully disabled methods
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class DisabledMethodException extends BadMethodCallException implements ExceptionInterface
{
    const NAME = __CLASS__;

    public static function disabledMethod(string $method) : self
    {
        return new self(sprintf('Method "%s" is forcefully disabled', $method));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
