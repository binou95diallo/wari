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
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ApiResource(mercure=true)
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DummyMercure
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    public $id;
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
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ApiResource(mercure=true)
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DummyMercure
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    public $id;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
