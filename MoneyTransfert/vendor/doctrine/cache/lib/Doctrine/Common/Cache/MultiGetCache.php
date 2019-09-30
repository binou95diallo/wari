<<<<<<< HEAD
<?php

namespace Doctrine\Common\Cache;

/**
 * Interface for cache drivers that allows to get many items at once.
 *
 * @link   www.doctrine-project.org
 * @deprecated
 */
interface MultiGetCache
{
    /**
     * Returns an associative array of values for keys is found in cache.
     *
     * @param string[] $keys Array of keys to retrieve from cache
     * @return mixed[] Array of retrieved values, indexed by the specified keys.
     *                 Values that couldn't be retrieved are not contained in this array.
     */
    public function fetchMultiple(array $keys);
}
=======
<?php

namespace Doctrine\Common\Cache;

/**
 * Interface for cache drivers that allows to get many items at once.
 *
 * @link   www.doctrine-project.org
 * @deprecated
 */
interface MultiGetCache
{
    /**
     * Returns an associative array of values for keys is found in cache.
     *
     * @param string[] $keys Array of keys to retrieve from cache
     * @return mixed[] Array of retrieved values, indexed by the specified keys.
     *                 Values that couldn't be retrieved are not contained in this array.
     */
    public function fetchMultiple(array $keys);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
