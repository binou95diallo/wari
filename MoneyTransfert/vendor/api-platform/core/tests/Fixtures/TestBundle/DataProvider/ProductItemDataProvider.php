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

namespace ApiPlatform\Core\Tests\Fixtures\TestBundle\DataProvider;

use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use ApiPlatform\Core\Tests\Fixtures\TestBundle\Entity\Product;
use ApiPlatform\Core\Tests\Fixtures\TestBundle\Model\ProductInterface;
use Doctrine\Common\Persistence\ManagerRegistry;

class ProductItemDataProvider implements ItemDataProviderInterface, RestrictedDataProviderInterface
{
    private $managerRegistry;

    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return is_a($resourceClass, ProductInterface::class, true);
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = [])
    {
        return $this->managerRegistry->getRepository(Product::class)->find($id);
    }
}
