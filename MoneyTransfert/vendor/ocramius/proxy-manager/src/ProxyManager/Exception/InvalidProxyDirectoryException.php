<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\Exception;

use InvalidArgumentException;

/**
 * Exception for invalid directories
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class InvalidProxyDirectoryException extends InvalidArgumentException implements ExceptionInterface
{
    public static function proxyDirectoryNotFound(string $directory) : self
    {
        return new self(sprintf('Provided directory "%s" does not exist', $directory));
    }
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\Exception;

use InvalidArgumentException;

/**
 * Exception for invalid directories
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class InvalidProxyDirectoryException extends InvalidArgumentException implements ExceptionInterface
{
    public static function proxyDirectoryNotFound(string $directory) : self
    {
        return new self(sprintf('Provided directory "%s" does not exist', $directory));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
