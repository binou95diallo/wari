<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\Inflector\Util;

/**
 * Converts given parameters into a likely unique hash
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class ParameterHasher
{
    /**
     * Converts the given parameters into a likely-unique hash
     */
    public function hashParameters(array $parameters) : string
    {
        return md5(serialize($parameters));
    }
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\Inflector\Util;

/**
 * Converts given parameters into a likely unique hash
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class ParameterHasher
{
    /**
     * Converts the given parameters into a likely-unique hash
     */
    public function hashParameters(array $parameters) : string
    {
        return md5(serialize($parameters));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
