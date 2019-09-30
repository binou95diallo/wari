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

namespace ApiPlatform\Core\Tests\Fixtures\TestBundle\Controller\Orm;

use ApiPlatform\Core\Tests\Fixtures\TestBundle\Entity\DummyValidation;
use Symfony\Component\Routing\Annotation\Route;

class DummyValidationController
{
    /**
     * @Route(
     *     methods={"POST"},
     *     name="post_validation_groups",
     *     path="/dummy_validation/validation_groups",
     *     defaults={"_api_resource_class"=DummyValidation::class, "_api_collection_operation_name"="post_validation_groups"}
     * )
     */
    public function postValidationGroups($data)
    {
        return $data;
    }

    /**
     * @Route(
     *     methods={"POST"},
     *     name="post_validation_sequence",
     *     path="/dummy_validation/validation_sequence",
     *     defaults={"_api_resource_class"=DummyValidation::class, "_api_collection_operation_name"="post_validation_sequence"}
     * )
     */
    public function postValidationSequence($data)
    {
        return $data;
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

namespace ApiPlatform\Core\Tests\Fixtures\TestBundle\Controller\Orm;

use ApiPlatform\Core\Tests\Fixtures\TestBundle\Entity\DummyValidation;
use Symfony\Component\Routing\Annotation\Route;

class DummyValidationController
{
    /**
     * @Route(
     *     methods={"POST"},
     *     name="post_validation_groups",
     *     path="/dummy_validation/validation_groups",
     *     defaults={"_api_resource_class"=DummyValidation::class, "_api_collection_operation_name"="post_validation_groups"}
     * )
     */
    public function postValidationGroups($data)
    {
        return $data;
    }

    /**
     * @Route(
     *     methods={"POST"},
     *     name="post_validation_sequence",
     *     path="/dummy_validation/validation_sequence",
     *     defaults={"_api_resource_class"=DummyValidation::class, "_api_collection_operation_name"="post_validation_sequence"}
     * )
     */
    public function postValidationSequence($data)
    {
        return $data;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
