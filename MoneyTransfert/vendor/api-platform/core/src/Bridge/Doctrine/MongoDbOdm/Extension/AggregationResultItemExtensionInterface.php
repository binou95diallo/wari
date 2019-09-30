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

namespace ApiPlatform\Core\Bridge\Doctrine\MongoDbOdm\Extension;

use Doctrine\ODM\MongoDB\Aggregation\Builder;

/**
 * Interface of Doctrine MongoDB ODM aggregation extensions that supports result production
 * for specific cases such as Aggregation alteration.
 *
 * @experimental
 *
 * @author Alan Poulain <contact@alanpoulain.eu>
 */
interface AggregationResultItemExtensionInterface extends AggregationItemExtensionInterface
{
    public function supportsResult(string $resourceClass, string $operationName = null, array $context = []): bool;

    public function getResult(Builder $aggregationBuilder, string $resourceClass, string $operationName = null, array $context = []);
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

namespace ApiPlatform\Core\Bridge\Doctrine\MongoDbOdm\Extension;

use Doctrine\ODM\MongoDB\Aggregation\Builder;

/**
 * Interface of Doctrine MongoDB ODM aggregation extensions that supports result production
 * for specific cases such as Aggregation alteration.
 *
 * @experimental
 *
 * @author Alan Poulain <contact@alanpoulain.eu>
 */
interface AggregationResultItemExtensionInterface extends AggregationItemExtensionInterface
{
    public function supportsResult(string $resourceClass, string $operationName = null, array $context = []): bool;

    public function getResult(Builder $aggregationBuilder, string $resourceClass, string $operationName = null, array $context = []);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
