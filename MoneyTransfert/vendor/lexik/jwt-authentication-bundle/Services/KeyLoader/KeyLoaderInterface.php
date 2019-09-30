<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader;

/**
 * Interface for classes that are able to load crypto keys.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 *
 * @internal
 */
interface KeyLoaderInterface
{
    const TYPE_PUBLIC  = 'public';

    const TYPE_PRIVATE = 'private';

    /**
     * Loads a key from a given type (public or private).
     *
     * @param resource|string|null
     *
     * @return resource|string|null
     */
    public function loadKey($type);

    /**
     * @return string|null
     */
    public function getPassphrase();
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader;

/**
 * Interface for classes that are able to load crypto keys.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 *
 * @internal
 */
interface KeyLoaderInterface
{
    const TYPE_PUBLIC  = 'public';

    const TYPE_PRIVATE = 'private';

    /**
     * Loads a key from a given type (public or private).
     *
     * @param resource|string|null
     *
     * @return resource|string|null
     */
    public function loadKey($type);

    /**
     * @return string|null
     */
    public function getPassphrase();
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
