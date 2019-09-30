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

namespace ApiPlatform\Core\Tests\Fixtures;

/**
 * Replace Doctrine\ORM\Query in tests because it cannot be mocked.
 */
class Query
{
    public function getFirstResult(): ?int
    {
        return null;
    }

    public function getMaxResults(): ?int
    {
        return null;
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

namespace ApiPlatform\Core\Tests\Fixtures;

/**
 * Replace Doctrine\ORM\Query in tests because it cannot be mocked.
 */
class Query
{
    public function getFirstResult(): ?int
    {
        return null;
    }

    public function getMaxResults(): ?int
    {
        return null;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
