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
 * Guesses if the property can be accessed or mutated.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface PropertyAccessExtractorInterface
{
    /**
     * Is the property readable?
     *
     * @param string $class
     * @param string $property
     * @param array  $context
     *
     * @return bool|null
     */
    public function isReadable($class, $property, array $context = []);

    /**
     * Is the property writable?
     *
     * @param string $class
     * @param string $property
     * @param array  $context
     *
     * @return bool|null
     */
    public function isWritable($class, $property, array $context = []);
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
 * Guesses if the property can be accessed or mutated.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface PropertyAccessExtractorInterface
{
    /**
     * Is the property readable?
     *
     * @param string $class
     * @param string $property
     * @param array  $context
     *
     * @return bool|null
     */
    public function isReadable($class, $property, array $context = []);

    /**
     * Is the property writable?
     *
     * @param string $class
     * @param string $property
     * @param array  $context
     *
     * @return bool|null
     */
    public function isWritable($class, $property, array $context = []);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
