<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\ProxyGenerator\Util;

use ReflectionClass;
use ReflectionMethod;

/**
 * Internal utility class - allows fetching a method from a given class, if it exists
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class GetMethodIfExists
{
    private function __construct()
    {
    }

    public static function get(ReflectionClass $class, string $method) : ?ReflectionMethod
    {
        return $class->hasMethod($method) ? $class->getMethod($method) : null;
    }
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\ProxyGenerator\Util;

use ReflectionClass;
use ReflectionMethod;

/**
 * Internal utility class - allows fetching a method from a given class, if it exists
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class GetMethodIfExists
{
    private function __construct()
    {
    }

    public static function get(ReflectionClass $class, string $method) : ?ReflectionMethod
    {
        return $class->hasMethod($method) ? $class->getMethod($method) : null;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
