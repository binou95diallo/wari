<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\Autoloader;

/**
 * Basic autoloader utilities required to work with proxy files
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface AutoloaderInterface
{
    /**
     * Callback to allow the object to be handled as autoloader - tries to autoload the given class name
     *
     * @param string $className
     */
    public function __invoke(string $className) : bool;
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\Autoloader;

/**
 * Basic autoloader utilities required to work with proxy files
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface AutoloaderInterface
{
    /**
     * Callback to allow the object to be handled as autoloader - tries to autoload the given class name
     *
     * @param string $className
     */
    public function __invoke(string $className) : bool;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
