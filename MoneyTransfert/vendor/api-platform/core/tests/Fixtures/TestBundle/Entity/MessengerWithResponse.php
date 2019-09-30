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

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Tests\Fixtures\TestBundle\Dto\MessengerResponseInput;

/**
 * @ApiResource(messenger="input", input=MessengerResponseInput::class)
 */
class MessengerWithResponse
{
    /**
     * @ApiProperty(identifier=true)
     */
    public $id;
    /**
     * @var string
     */
    public $name;
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

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Tests\Fixtures\TestBundle\Dto\MessengerResponseInput;

/**
 * @ApiResource(messenger="input", input=MessengerResponseInput::class)
 */
class MessengerWithResponse
{
    /**
     * @ApiProperty(identifier=true)
     */
    public $id;
    /**
     * @var string
     */
    public $name;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
