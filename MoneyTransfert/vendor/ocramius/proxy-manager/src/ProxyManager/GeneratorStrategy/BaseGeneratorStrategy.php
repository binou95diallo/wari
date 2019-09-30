<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\GeneratorStrategy;

use Zend\Code\Generator\ClassGenerator;

/**
 * Generator strategy that generates the class body
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class BaseGeneratorStrategy implements GeneratorStrategyInterface
{
    /**
     * {@inheritDoc}
     */
    public function generate(ClassGenerator $classGenerator) : string
    {
        return $classGenerator->generate();
    }
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\GeneratorStrategy;

use Zend\Code\Generator\ClassGenerator;

/**
 * Generator strategy that generates the class body
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class BaseGeneratorStrategy implements GeneratorStrategyInterface
{
    /**
     * {@inheritDoc}
     */
    public function generate(ClassGenerator $classGenerator) : string
    {
        return $classGenerator->generate();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
