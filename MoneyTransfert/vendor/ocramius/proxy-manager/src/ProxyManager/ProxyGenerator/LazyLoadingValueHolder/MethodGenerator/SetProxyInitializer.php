<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\ProxyGenerator\LazyLoadingValueHolder\MethodGenerator;

use Closure;
use ProxyManager\Generator\MethodGenerator;
use Zend\Code\Generator\ParameterGenerator;
use Zend\Code\Generator\PropertyGenerator;

/**
 * Implementation for {@see \ProxyManager\Proxy\LazyLoadingInterface::setProxyInitializer}
 * for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class SetProxyInitializer extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator $initializerProperty
     *
     * @throws \Zend\Code\Generator\Exception\InvalidArgumentException
     */
    public function __construct(PropertyGenerator $initializerProperty)
    {
        parent::__construct('setProxyInitializer');

        $initializerParameter = new ParameterGenerator('initializer');

        $initializerParameter->setType(Closure::class);
        $initializerParameter->setDefaultValue(null);
        $this->setParameter($initializerParameter);
        $this->setBody('$this->' . $initializerProperty->getName() . ' = $initializer;');
    }
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\ProxyGenerator\LazyLoadingValueHolder\MethodGenerator;

use Closure;
use ProxyManager\Generator\MethodGenerator;
use Zend\Code\Generator\ParameterGenerator;
use Zend\Code\Generator\PropertyGenerator;

/**
 * Implementation for {@see \ProxyManager\Proxy\LazyLoadingInterface::setProxyInitializer}
 * for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class SetProxyInitializer extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator $initializerProperty
     *
     * @throws \Zend\Code\Generator\Exception\InvalidArgumentException
     */
    public function __construct(PropertyGenerator $initializerProperty)
    {
        parent::__construct('setProxyInitializer');

        $initializerParameter = new ParameterGenerator('initializer');

        $initializerParameter->setType(Closure::class);
        $initializerParameter->setDefaultValue(null);
        $this->setParameter($initializerParameter);
        $this->setBody('$this->' . $initializerProperty->getName() . ' = $initializer;');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
