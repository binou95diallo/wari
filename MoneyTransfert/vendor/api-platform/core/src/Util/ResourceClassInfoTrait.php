<<<<<<< HEAD
<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Util;

use ApiPlatform\Core\Api\ResourceClassResolverInterface;

/**
 * Retrieves information about a resource class.
 *
 * @internal
 */
trait ResourceClassInfoTrait
{
    use ClassInfoTrait;

    /**
     * @var ResourceClassResolverInterface|null
     */
    private $resourceClassResolver;

    /**
     * Gets the resource class of the given object.
     *
     * @param object $object
     * @param bool   $strict If true, object class is expected to be a resource class
     *
     * @return string|null The resource class, or null if object class is not a resource class
     */
    private function getResourceClass($object, bool $strict = false): ?string
    {
        $objectClass = $this->getObjectClass($object);

        if (null === $this->resourceClassResolver) {
            return $objectClass;
        }

        if (!$strict && !$this->resourceClassResolver->isResourceClass($objectClass)) {
            return null;
        }

        return $this->resourceClassResolver->getResourceClass($object);
    }
}
=======
<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Util;

use ApiPlatform\Core\Api\ResourceClassResolverInterface;

/**
 * Retrieves information about a resource class.
 *
 * @internal
 */
trait ResourceClassInfoTrait
{
    use ClassInfoTrait;

    /**
     * @var ResourceClassResolverInterface|null
     */
    private $resourceClassResolver;

    /**
     * Gets the resource class of the given object.
     *
     * @param object $object
     * @param bool   $strict If true, object class is expected to be a resource class
     *
     * @return string|null The resource class, or null if object class is not a resource class
     */
    private function getResourceClass($object, bool $strict = false): ?string
    {
        $objectClass = $this->getObjectClass($object);

        if (null === $this->resourceClassResolver) {
            return $objectClass;
        }

        if (!$strict && !$this->resourceClassResolver->isResourceClass($objectClass)) {
            return null;
        }

        return $this->resourceClassResolver->getResourceClass($object);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
