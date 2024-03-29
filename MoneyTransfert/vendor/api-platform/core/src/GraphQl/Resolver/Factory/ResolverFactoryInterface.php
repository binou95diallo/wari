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

namespace ApiPlatform\Core\GraphQl\Resolver\Factory;

/**
 * Builds a GraphQL resolver.
 *
 * @experimental
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ResolverFactoryInterface
{
    public function __invoke(string $resourceClass = null, string $rootClass = null, string $operationName = null): callable;
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

namespace ApiPlatform\Core\GraphQl\Resolver\Factory;

/**
 * Builds a GraphQL resolver.
 *
 * @experimental
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ResolverFactoryInterface
{
    public function __invoke(string $resourceClass = null, string $rootClass = null, string $operationName = null): callable;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
