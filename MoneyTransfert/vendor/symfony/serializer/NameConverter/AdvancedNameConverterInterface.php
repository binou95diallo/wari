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

namespace Symfony\Component\Serializer\NameConverter;

/**
 * Gives access to the class, the format and the context in the property name converters.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface AdvancedNameConverterInterface extends NameConverterInterface
{
    /**
     * {@inheritdoc}
     */
    public function normalize($propertyName, string $class = null, string $format = null, array $context = []);

    /**
     * {@inheritdoc}
     */
    public function denormalize($propertyName, string $class = null, string $format = null, array $context = []);
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

namespace Symfony\Component\Serializer\NameConverter;

/**
 * Gives access to the class, the format and the context in the property name converters.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface AdvancedNameConverterInterface extends NameConverterInterface
{
    /**
     * {@inheritdoc}
     */
    public function normalize($propertyName, string $class = null, string $format = null, array $context = []);

    /**
     * {@inheritdoc}
     */
    public function denormalize($propertyName, string $class = null, string $format = null, array $context = []);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
