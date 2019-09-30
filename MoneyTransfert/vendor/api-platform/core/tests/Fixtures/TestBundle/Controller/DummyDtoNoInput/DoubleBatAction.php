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

namespace ApiPlatform\Core\Tests\Fixtures\TestBundle\Controller\DummyDtoNoInput;

use ApiPlatform\Core\Tests\Fixtures\TestBundle\Document\DummyDtoNoInput as DummyDtoNoInputDocument;
use ApiPlatform\Core\Tests\Fixtures\TestBundle\Entity\DummyDtoNoInput;

final class DoubleBatAction
{
    public function __invoke($data)
    {
        if (!$data instanceof DummyDtoNoInput && !$data instanceof DummyDtoNoInputDocument) {
            throw new \InvalidArgumentException();
        }

        $data->lorem .= $data->lorem;

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

namespace ApiPlatform\Core\Tests\Fixtures\TestBundle\Controller\DummyDtoNoInput;

use ApiPlatform\Core\Tests\Fixtures\TestBundle\Document\DummyDtoNoInput as DummyDtoNoInputDocument;
use ApiPlatform\Core\Tests\Fixtures\TestBundle\Entity\DummyDtoNoInput;

final class DoubleBatAction
{
    public function __invoke($data)
    {
        if (!$data instanceof DummyDtoNoInput && !$data instanceof DummyDtoNoInputDocument) {
            throw new \InvalidArgumentException();
        }

        $data->lorem .= $data->lorem;

        return $data;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
