<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\Signature;

use Zend\Code\Generator\ClassGenerator;

/**
 * Applies a signature to a given class generator
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface ClassSignatureGeneratorInterface
{
    /**
     * Applies a signature to a given class generator
     */
    public function addSignature(ClassGenerator $classGenerator, array $parameters) : ClassGenerator;
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\Signature;

use Zend\Code\Generator\ClassGenerator;

/**
 * Applies a signature to a given class generator
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface ClassSignatureGeneratorInterface
{
    /**
     * Applies a signature to a given class generator
     */
    public function addSignature(ClassGenerator $classGenerator, array $parameters) : ClassGenerator;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
