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

namespace Symfony\Component\Form\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\FormBuilder;

abstract class AbstractFormTest extends TestCase
{
    /**
     * @var EventDispatcherInterface
     */
    protected $dispatcher;

    /**
     * @var \Symfony\Component\Form\FormFactoryInterface
     */
    protected $factory;

    /**
     * @var \Symfony\Component\Form\FormInterface
     */
    protected $form;

    protected function setUp()
    {
        $this->dispatcher = new EventDispatcher();
        $this->factory = $this->getMockBuilder('Symfony\Component\Form\FormFactoryInterface')->getMock();
        $this->form = $this->createForm();
    }

    protected function tearDown()
    {
        $this->dispatcher = null;
        $this->factory = null;
        $this->form = null;
    }

    /**
     * @return \Symfony\Component\Form\FormInterface
     */
    abstract protected function createForm();

    /**
     * @param string                   $name
     * @param EventDispatcherInterface $dispatcher
     * @param string|null              $dataClass
     * @param array                    $options
     *
     * @return FormBuilder
     */
    protected function getBuilder($name = 'name', EventDispatcherInterface $dispatcher = null, $dataClass = null, array $options = [])
    {
        return new FormBuilder($name, $dataClass, $dispatcher ?: $this->dispatcher, $this->factory, $options);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getDataMapper()
    {
        return $this->getMockBuilder('Symfony\Component\Form\DataMapperInterface')->getMock();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getDataTransformer()
    {
        return $this->getMockBuilder('Symfony\Component\Form\DataTransformerInterface')->getMock();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getFormValidator()
    {
        return $this->getMockBuilder('Symfony\Component\Form\FormValidatorInterface')->getMock();
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

namespace Symfony\Component\Form\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\FormBuilder;

abstract class AbstractFormTest extends TestCase
{
    /**
     * @var EventDispatcherInterface
     */
    protected $dispatcher;

    /**
     * @var \Symfony\Component\Form\FormFactoryInterface
     */
    protected $factory;

    /**
     * @var \Symfony\Component\Form\FormInterface
     */
    protected $form;

    protected function setUp()
    {
        $this->dispatcher = new EventDispatcher();
        $this->factory = $this->getMockBuilder('Symfony\Component\Form\FormFactoryInterface')->getMock();
        $this->form = $this->createForm();
    }

    protected function tearDown()
    {
        $this->dispatcher = null;
        $this->factory = null;
        $this->form = null;
    }

    /**
     * @return \Symfony\Component\Form\FormInterface
     */
    abstract protected function createForm();

    /**
     * @param string                   $name
     * @param EventDispatcherInterface $dispatcher
     * @param string|null              $dataClass
     * @param array                    $options
     *
     * @return FormBuilder
     */
    protected function getBuilder($name = 'name', EventDispatcherInterface $dispatcher = null, $dataClass = null, array $options = [])
    {
        return new FormBuilder($name, $dataClass, $dispatcher ?: $this->dispatcher, $this->factory, $options);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getDataMapper()
    {
        return $this->getMockBuilder('Symfony\Component\Form\DataMapperInterface')->getMock();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getDataTransformer()
    {
        return $this->getMockBuilder('Symfony\Component\Form\DataTransformerInterface')->getMock();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getFormValidator()
    {
        return $this->getMockBuilder('Symfony\Component\Form\FormValidatorInterface')->getMock();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
