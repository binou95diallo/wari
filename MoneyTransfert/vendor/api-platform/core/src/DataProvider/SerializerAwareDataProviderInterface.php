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

namespace ApiPlatform\Core\DataProvider;

use Psr\Container\ContainerInterface;

/**
 * Injects serializer in data providers.
 *
 * @author Vincent Chalamon <vincentchalamon@gmail.com>
 */
interface SerializerAwareDataProviderInterface
{
    public function setSerializerLocator(ContainerInterface $serializerLocator);
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

namespace ApiPlatform\Core\DataProvider;

use Psr\Container\ContainerInterface;

/**
 * Injects serializer in data providers.
 *
 * @author Vincent Chalamon <vincentchalamon@gmail.com>
 */
interface SerializerAwareDataProviderInterface
{
    public function setSerializerLocator(ContainerInterface $serializerLocator);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
