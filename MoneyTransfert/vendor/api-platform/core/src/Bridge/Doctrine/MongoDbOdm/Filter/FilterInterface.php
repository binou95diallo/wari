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

namespace ApiPlatform\Core\Bridge\Doctrine\MongoDbOdm\Filter;

use ApiPlatform\Core\Api\FilterInterface as BaseFilterInterface;
use Doctrine\ODM\MongoDB\Aggregation\Builder;

/**
 * Doctrine MongoDB ODM filter interface.
 *
 * @experimental
 *
 * @author Alan Poulain <contact@alanpoulain.eu>
 */
interface FilterInterface extends BaseFilterInterface
{
    /**
     * Applies the filter.
     */
    public function apply(Builder $aggregationBuilder, string $resourceClass, string $operationName = null, array &$context = []);
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

namespace ApiPlatform\Core\Bridge\Doctrine\MongoDbOdm\Filter;

use ApiPlatform\Core\Api\FilterInterface as BaseFilterInterface;
use Doctrine\ODM\MongoDB\Aggregation\Builder;

/**
 * Doctrine MongoDB ODM filter interface.
 *
 * @experimental
 *
 * @author Alan Poulain <contact@alanpoulain.eu>
 */
interface FilterInterface extends BaseFilterInterface
{
    /**
     * Applies the filter.
     */
    public function apply(Builder $aggregationBuilder, string $resourceClass, string $operationName = null, array &$context = []);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
