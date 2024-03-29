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

namespace Symfony\Component\Form\Test\Traits;

use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\Test\TypeTestCase;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Validator\ValidatorInterface;

trait ValidatorExtensionTrait
{
    /**
     * @var ValidatorInterface|null
     */
    protected $validator;

    /**
     * @return ValidatorExtension
     */
    protected function getValidatorExtension()
    {
        if (!interface_exists(ValidatorInterface::class)) {
            throw new \Exception('In order to use the "ValidatorExtensionTrait", the symfony/validator component must be installed');
        }

        if (!$this instanceof TypeTestCase) {
            throw new \Exception(sprintf('The trait "ValidatorExtensionTrait" can only be added to a class that extends %s', TypeTestCase::class));
        }

        $this->validator = $this->getMockBuilder(ValidatorInterface::class)->getMock();
        $metadata = $this->getMockBuilder(ClassMetadata::class)->disableOriginalConstructor()->setMethods(['addPropertyConstraint'])->getMock();
        $this->validator->expects($this->any())->method('getMetadataFor')->will($this->returnValue($metadata));
        $this->validator->expects($this->any())->method('validate')->will($this->returnValue([]));

        return new ValidatorExtension($this->validator);
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

namespace Symfony\Component\Form\Test\Traits;

use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\Test\TypeTestCase;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Validator\ValidatorInterface;

trait ValidatorExtensionTrait
{
    /**
     * @var ValidatorInterface|null
     */
    protected $validator;

    /**
     * @return ValidatorExtension
     */
    protected function getValidatorExtension()
    {
        if (!interface_exists(ValidatorInterface::class)) {
            throw new \Exception('In order to use the "ValidatorExtensionTrait", the symfony/validator component must be installed');
        }

        if (!$this instanceof TypeTestCase) {
            throw new \Exception(sprintf('The trait "ValidatorExtensionTrait" can only be added to a class that extends %s', TypeTestCase::class));
        }

        $this->validator = $this->getMockBuilder(ValidatorInterface::class)->getMock();
        $metadata = $this->getMockBuilder(ClassMetadata::class)->disableOriginalConstructor()->setMethods(['addPropertyConstraint'])->getMock();
        $this->validator->expects($this->any())->method('getMetadataFor')->will($this->returnValue($metadata));
        $this->validator->expects($this->any())->method('validate')->will($this->returnValue([]));

        return new ValidatorExtension($this->validator);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
