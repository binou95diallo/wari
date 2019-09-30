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

/**
 * @ApiResource
 */
final class DummyForAdditionalFieldsInput
{
    private $dummyName;

    public function __construct(string $dummyName)
    {
        $this->dummyName = $dummyName;
    }

    public function getDummyName(): string
    {
        return $this->dummyName;
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

namespace ApiPlatform\Core\Tests\Fixtures\TestBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 */
final class DummyForAdditionalFieldsInput
{
    private $dummyName;

    public function __construct(string $dummyName)
    {
        $this->dummyName = $dummyName;
    }

    public function getDummyName(): string
    {
        return $this->dummyName;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
