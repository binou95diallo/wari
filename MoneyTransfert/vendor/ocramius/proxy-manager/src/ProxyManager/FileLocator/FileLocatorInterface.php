<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\FileLocator;

/**
 * Basic autoloader utilities required to work with proxy files
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface FileLocatorInterface
{
    /**
     * Retrieves the file name for the given proxy
     */
    public function getProxyFileName(string $className) : string;
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\FileLocator;

/**
 * Basic autoloader utilities required to work with proxy files
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface FileLocatorInterface
{
    /**
     * Retrieves the file name for the given proxy
     */
    public function getProxyFileName(string $className) : string;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
