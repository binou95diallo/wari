<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\Factory\RemoteObject;

/**
 * Remote Object adapter interface
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
interface AdapterInterface
{
    /**
     * Call remote object
     *
     * @param string $wrappedClass
     * @param string $method
     * @param array  $params
     */
    public function call(string $wrappedClass, string $method, array $params = []);
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\Factory\RemoteObject;

/**
 * Remote Object adapter interface
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
interface AdapterInterface
{
    /**
     * Call remote object
     *
     * @param string $wrappedClass
     * @param string $method
     * @param array  $params
     */
    public function call(string $wrappedClass, string $method, array $params = []);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
