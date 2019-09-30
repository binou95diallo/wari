<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\Signature\Exception;

use ReflectionClass;
use UnexpectedValueException;

/**
 * Exception for no found signatures
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MissingSignatureException extends UnexpectedValueException implements ExceptionInterface
{
    public static function fromMissingSignature(ReflectionClass $class, array $parameters, string $expected) : self
    {
        return new self(sprintf(
            'No signature found for class "%s", expected signature "%s" for %d parameters',
            $class->getName(),
            $expected,
            count($parameters)
        ));
    }
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\Signature\Exception;

use ReflectionClass;
use UnexpectedValueException;

/**
 * Exception for no found signatures
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MissingSignatureException extends UnexpectedValueException implements ExceptionInterface
{
    public static function fromMissingSignature(ReflectionClass $class, array $parameters, string $expected) : self
    {
        return new self(sprintf(
            'No signature found for class "%s", expected signature "%s" for %d parameters',
            $class->getName(),
            $expected,
            count($parameters)
        ));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
