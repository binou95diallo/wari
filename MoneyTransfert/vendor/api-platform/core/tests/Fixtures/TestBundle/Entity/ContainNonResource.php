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

namespace ApiPlatform\Core\Tests\Fixtures\TestBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Tests\Fixtures\NotAResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Resource linked to a standard object.
 *
 * @ORM\Entity
 *
 * @ApiResource(
 *     normalizationContext={
 *         "groups"="contain_non_resource",
 *     },
 * )
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ContainNonResource
{
    /**
     * @var mixed
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Groups("contain_non_resource")
     */
    public $id;

    /**
     * @var ContainNonResource
     *
     * @Groups("contain_non_resource")
     */
    public $nested;

    /**
     * @var NotAResource
     *
     * @Groups("contain_non_resource")
     */
    public $notAResource;
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

namespace ApiPlatform\Core\Tests\Fixtures\TestBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Tests\Fixtures\NotAResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Resource linked to a standard object.
 *
 * @ORM\Entity
 *
 * @ApiResource(
 *     normalizationContext={
 *         "groups"="contain_non_resource",
 *     },
 * )
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ContainNonResource
{
    /**
     * @var mixed
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Groups("contain_non_resource")
     */
    public $id;

    /**
     * @var ContainNonResource
     *
     * @Groups("contain_non_resource")
     */
    public $nested;

    /**
     * @var NotAResource
     *
     * @Groups("contain_non_resource")
     */
    public $notAResource;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
