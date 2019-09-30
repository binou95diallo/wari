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

namespace ApiPlatform\Core\Api;

use ApiPlatform\Core\Metadata\Resource\ResourceNameCollection;

/**
 * The first path you will see in the API.
 *
 * @author Amrouche Hamza <hamza.simperfit@gmail.com>
 */
final class Entrypoint
{
    private $resourceNameCollection;

    public function __construct(ResourceNameCollection $resourceNameCollection)
    {
        $this->resourceNameCollection = $resourceNameCollection;
    }

    public function getResourceNameCollection(): ResourceNameCollection
    {
        return $this->resourceNameCollection;
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

namespace ApiPlatform\Core\Api;

use ApiPlatform\Core\Metadata\Resource\ResourceNameCollection;

/**
 * The first path you will see in the API.
 *
 * @author Amrouche Hamza <hamza.simperfit@gmail.com>
 */
final class Entrypoint
{
    private $resourceNameCollection;

    public function __construct(ResourceNameCollection $resourceNameCollection)
    {
        $this->resourceNameCollection = $resourceNameCollection;
    }

    public function getResourceNameCollection(): ResourceNameCollection
    {
        return $this->resourceNameCollection;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
