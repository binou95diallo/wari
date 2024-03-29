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

namespace Symfony\Component\Form\Test;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Test\Traits\ValidatorExtensionTrait;

abstract class TypeTestCase extends FormIntegrationTestCase
{
    use TestCaseSetUpTearDownTrait;

    /**
     * @var FormBuilder
     */
    protected $builder;

    /**
     * @var EventDispatcherInterface
     */
    protected $dispatcher;

    private function doSetUp()
    {
        parent::setUp();

        $this->dispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();
        $this->builder = new FormBuilder('', null, $this->dispatcher, $this->factory);
    }

    private function doTearDown()
    {
        if (\in_array(ValidatorExtensionTrait::class, class_uses($this))) {
            $this->validator = null;
        }
    }

    protected function getExtensions()
    {
        $extensions = [];

        if (\in_array(ValidatorExtensionTrait::class, class_uses($this))) {
            $extensions[] = $this->getValidatorExtension();
        }

        return $extensions;
    }

    public static function assertDateTimeEquals(\DateTime $expected, \DateTime $actual)
    {
        self::assertEquals($expected->format('c'), $actual->format('c'));
    }

    public static function assertDateIntervalEquals(\DateInterval $expected, \DateInterval $actual)
    {
        self::assertEquals($expected->format('%RP%yY%mM%dDT%hH%iM%sS'), $actual->format('%RP%yY%mM%dDT%hH%iM%sS'));
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

namespace Symfony\Component\Form\Test;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Test\Traits\ValidatorExtensionTrait;

abstract class TypeTestCase extends FormIntegrationTestCase
{
    use TestCaseSetUpTearDownTrait;

    /**
     * @var FormBuilder
     */
    protected $builder;

    /**
     * @var EventDispatcherInterface
     */
    protected $dispatcher;

    private function doSetUp()
    {
        parent::setUp();

        $this->dispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();
        $this->builder = new FormBuilder('', null, $this->dispatcher, $this->factory);
    }

    private function doTearDown()
    {
        if (\in_array(ValidatorExtensionTrait::class, class_uses($this))) {
            $this->validator = null;
        }
    }

    protected function getExtensions()
    {
        $extensions = [];

        if (\in_array(ValidatorExtensionTrait::class, class_uses($this))) {
            $extensions[] = $this->getValidatorExtension();
        }

        return $extensions;
    }

    public static function assertDateTimeEquals(\DateTime $expected, \DateTime $actual)
    {
        self::assertEquals($expected->format('c'), $actual->format('c'));
    }

    public static function assertDateIntervalEquals(\DateInterval $expected, \DateInterval $actual)
    {
        self::assertEquals($expected->format('%RP%yY%mM%dDT%hH%iM%sS'), $actual->format('%RP%yY%mM%dDT%hH%iM%sS'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
