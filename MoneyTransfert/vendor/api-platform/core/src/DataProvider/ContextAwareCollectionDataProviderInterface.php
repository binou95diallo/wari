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

namespace ApiPlatform\Core\DataProvider;

/**
 * Retrieves items from a persistence layer and allow to pass a context to it.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ContextAwareCollectionDataProviderInterface extends CollectionDataProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCollection(string $resourceClass, string $operationName = null, array $context = []);
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

namespace ApiPlatform\Core\DataProvider;

/**
 * Retrieves items from a persistence layer and allow to pass a context to it.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ContextAwareCollectionDataProviderInterface extends CollectionDataProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCollection(string $resourceClass, string $operationName = null, array $context = []);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
