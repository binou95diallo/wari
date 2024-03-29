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

namespace Symfony\Component\Validator\Mapping\Factory;

use Symfony\Component\Validator\Exception\LogicException;

/**
 * Metadata factory that does not store metadata.
 *
 * This implementation is useful if you want to validate values against
 * constraints only and you don't need to add constraints to classes and
 * properties.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class BlackHoleMetadataFactory implements MetadataFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getMetadataFor($value)
    {
        throw new LogicException('This class does not support metadata.');
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor($value)
    {
        return false;
    }
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

namespace Symfony\Component\Validator\Mapping\Factory;

use Symfony\Component\Validator\Exception\LogicException;

/**
 * Metadata factory that does not store metadata.
 *
 * This implementation is useful if you want to validate values against
 * constraints only and you don't need to add constraints to classes and
 * properties.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class BlackHoleMetadataFactory implements MetadataFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getMetadataFor($value)
    {
        throw new LogicException('This class does not support metadata.');
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor($value)
    {
        return false;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
