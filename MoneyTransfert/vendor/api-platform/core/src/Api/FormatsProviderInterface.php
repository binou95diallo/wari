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

namespace ApiPlatform\Core\Api;

/**
 * Extracts formats for a given operation according to the retrieved Metadata.
 *
 * @author Anthony GRASSIOT <antograssiot@free.fr>
 */
interface FormatsProviderInterface
{
    /**
     * Finds formats for an operation.
     */
    public function getFormatsFromAttributes(array $attributes): array;
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

namespace ApiPlatform\Core\Api;

/**
 * Extracts formats for a given operation according to the retrieved Metadata.
 *
 * @author Anthony GRASSIOT <antograssiot@free.fr>
 */
interface FormatsProviderInterface
{
    /**
     * Finds formats for an operation.
     */
    public function getFormatsFromAttributes(array $attributes): array;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
