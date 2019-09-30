<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\PropertyInfo;

/**
 * Type Extractor Interface.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface PropertyTypeExtractorInterface
{
    /**
     * Gets types of a property.
     *
     * @param string $class
     * @param string $property
     * @param array  $context
     *
     * @return Type[]|null
     */
    public function getTypes($class, $property, array $context = []);
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\PropertyInfo;

/**
 * Type Extractor Interface.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface PropertyTypeExtractorInterface
{
    /**
     * Gets types of a property.
     *
     * @param string $class
     * @param string $property
     * @param array  $context
     *
     * @return Type[]|null
     */
    public function getTypes($class, $property, array $context = []);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
