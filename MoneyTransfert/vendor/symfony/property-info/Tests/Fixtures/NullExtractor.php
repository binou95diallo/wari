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

namespace Symfony\Component\PropertyInfo\Tests\Fixtures;

use Symfony\Component\PropertyInfo\PropertyAccessExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyDescriptionExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyInitializableExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyListExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyTypeExtractorInterface;

/**
 * Not able to guess anything.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class NullExtractor implements PropertyListExtractorInterface, PropertyDescriptionExtractorInterface, PropertyTypeExtractorInterface, PropertyAccessExtractorInterface, PropertyInitializableExtractorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getShortDescription($class, $property, array $context = [])
    {
        $this->assertIsString($class);
        $this->assertIsString($property);
    }

    /**
     * {@inheritdoc}
     */
    public function getLongDescription($class, $property, array $context = [])
    {
        $this->assertIsString($class);
        $this->assertIsString($property);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes($class, $property, array $context = [])
    {
        $this->assertIsString($class);
        $this->assertIsString($property);
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable($class, $property, array $context = [])
    {
        $this->assertIsString($class);
        $this->assertIsString($property);
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable($class, $property, array $context = [])
    {
        $this->assertIsString($class);
        $this->assertIsString($property);
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties($class, array $context = [])
    {
        $this->assertIsString($class);
    }

    /**
     * {@inheritdoc}
     */
    public function isInitializable(string $class, string $property, array $context = []): ?bool
    {
        return null;
    }

    private function assertIsString($string)
    {
        if (!\is_string($string)) {
            throw new \InvalidArgumentException(sprintf('"%s" expects strings, given "%s".', __CLASS__, \gettype($string)));
        }
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

namespace Symfony\Component\PropertyInfo\Tests\Fixtures;

use Symfony\Component\PropertyInfo\PropertyAccessExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyDescriptionExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyInitializableExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyListExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyTypeExtractorInterface;

/**
 * Not able to guess anything.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class NullExtractor implements PropertyListExtractorInterface, PropertyDescriptionExtractorInterface, PropertyTypeExtractorInterface, PropertyAccessExtractorInterface, PropertyInitializableExtractorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getShortDescription($class, $property, array $context = [])
    {
        $this->assertIsString($class);
        $this->assertIsString($property);
    }

    /**
     * {@inheritdoc}
     */
    public function getLongDescription($class, $property, array $context = [])
    {
        $this->assertIsString($class);
        $this->assertIsString($property);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes($class, $property, array $context = [])
    {
        $this->assertIsString($class);
        $this->assertIsString($property);
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable($class, $property, array $context = [])
    {
        $this->assertIsString($class);
        $this->assertIsString($property);
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable($class, $property, array $context = [])
    {
        $this->assertIsString($class);
        $this->assertIsString($property);
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties($class, array $context = [])
    {
        $this->assertIsString($class);
    }

    /**
     * {@inheritdoc}
     */
    public function isInitializable(string $class, string $property, array $context = []): ?bool
    {
        return null;
    }

    private function assertIsString($string)
    {
        if (!\is_string($string)) {
            throw new \InvalidArgumentException(sprintf('"%s" expects strings, given "%s".', __CLASS__, \gettype($string)));
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
