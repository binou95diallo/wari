<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\ProxyGenerator\PropertyGenerator;

use ProxyManager\Generator\Util\IdentifierSuffixer;
use ProxyManager\ProxyGenerator\Util\Properties;
use Zend\Code\Generator\PropertyGenerator;

/**
 * Map of public properties that exist in the class being proxied
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class PublicPropertiesMap extends PropertyGenerator
{
    /**
     * @var bool[]
     */
    private $publicProperties = [];

    /**
     * @param Properties $properties
     *
     * @throws \Zend\Code\Generator\Exception\InvalidArgumentException
     */
    public function __construct(Properties $properties)
    {
        parent::__construct(IdentifierSuffixer::getIdentifier('publicProperties'));

        foreach ($properties->getPublicProperties() as $publicProperty) {
            $this->publicProperties[$publicProperty->getName()] = true;
        }

        $this->setDefaultValue($this->publicProperties);
        $this->setVisibility(self::VISIBILITY_PRIVATE);
        $this->setStatic(true);
        $this->setDocBlock('@var bool[] map of public properties of the parent class');
    }

    public function isEmpty() : bool
    {
        return ! $this->publicProperties;
    }
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\ProxyGenerator\PropertyGenerator;

use ProxyManager\Generator\Util\IdentifierSuffixer;
use ProxyManager\ProxyGenerator\Util\Properties;
use Zend\Code\Generator\PropertyGenerator;

/**
 * Map of public properties that exist in the class being proxied
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class PublicPropertiesMap extends PropertyGenerator
{
    /**
     * @var bool[]
     */
    private $publicProperties = [];

    /**
     * @param Properties $properties
     *
     * @throws \Zend\Code\Generator\Exception\InvalidArgumentException
     */
    public function __construct(Properties $properties)
    {
        parent::__construct(IdentifierSuffixer::getIdentifier('publicProperties'));

        foreach ($properties->getPublicProperties() as $publicProperty) {
            $this->publicProperties[$publicProperty->getName()] = true;
        }

        $this->setDefaultValue($this->publicProperties);
        $this->setVisibility(self::VISIBILITY_PRIVATE);
        $this->setStatic(true);
        $this->setDocBlock('@var bool[] map of public properties of the parent class');
    }

    public function isEmpty() : bool
    {
        return ! $this->publicProperties;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
