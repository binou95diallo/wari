<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\GeneratorStrategy;

use Zend\Code\Generator\ClassGenerator;

/**
 * Generator strategy interface - defines basic behavior of class generators
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface GeneratorStrategyInterface
{
    /**
     * Generate the provided class
     */
    public function generate(ClassGenerator $classGenerator) : string;
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\GeneratorStrategy;

use Zend\Code\Generator\ClassGenerator;

/**
 * Generator strategy interface - defines basic behavior of class generators
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface GeneratorStrategyInterface
{
    /**
     * Generate the provided class
     */
    public function generate(ClassGenerator $classGenerator) : string;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
