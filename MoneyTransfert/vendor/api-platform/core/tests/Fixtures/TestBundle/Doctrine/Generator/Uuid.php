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

namespace ApiPlatform\Core\Tests\Fixtures\TestBundle\Doctrine\Generator;

class Uuid implements \JsonSerializable
{
    private $id;

    public function __construct()
    {
        $this->id = 'foo';
    }

    public function __toString()
    {
        return $this->id;
    }

    public function jsonSerialize()
    {
        return $this->id;
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

namespace ApiPlatform\Core\Tests\Fixtures\TestBundle\Doctrine\Generator;

class Uuid implements \JsonSerializable
{
    private $id;

    public function __construct()
    {
        $this->id = 'foo';
    }

    public function __toString()
    {
        return $this->id;
    }

    public function jsonSerialize()
    {
        return $this->id;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
