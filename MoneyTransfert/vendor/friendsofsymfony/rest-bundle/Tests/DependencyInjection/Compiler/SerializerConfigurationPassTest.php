<<<<<<< HEAD
<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Tests\DependencyInjection\Compiler;

use FOS\RestBundle\DependencyInjection\Compiler\SerializerConfigurationPass;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * SerializerConfigurationPassTest test.
 */
class SerializerConfigurationPassTest extends TestCase
{
    /**
     * @var ContainerBuilder
     */
    private $container;

    protected function setUp()
    {
        $this->container = new ContainerBuilder();
    }

    public function testShouldDoNothingIfSerializerIsFound()
    {
        $serializer = $this->getMockBuilder('FOS\RestBundle\Serializer\Serializer')->getMock();
        $this->container->register('fos_rest.serializer', get_class($serializer));

        $compiler = new SerializerConfigurationPass();
        $compiler->process($this->container);

        $this->assertSame(get_class($serializer), $this->container->getDefinition('fos_rest.serializer')->getClass());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testShouldThrowInvalidArgumentExceptionWhenNoSerializerIsFound()
    {
        $compiler = new SerializerConfigurationPass();
        $compiler->process($this->container);
    }

    public function testShouldConfigureJMSSerializer()
    {
        $this->container->register('jms_serializer.serializer', 'JMS\Serializer\Serializer');

        $compiler = new SerializerConfigurationPass();
        $compiler->process($this->container);

        $this->assertSame('fos_rest.serializer.jms', (string) $this->container->getAlias('fos_rest.serializer'));
    }

    public function testShouldConfigureCoreSerializer()
    {
        $this->container->register('serializer', 'Symfony\Component\Serializer\Serializer');
        $this->container->register('fos_rest.serializer.exception_normalizer.jms');

        $compiler = new SerializerConfigurationPass();
        $compiler->process($this->container);

        $this->assertSame('fos_rest.serializer.symfony', (string) $this->container->getAlias('fos_rest.serializer'));
        $this->assertFalse($this->container->has('fos_rest.serializer.exception_normalizer.jms'));
    }

    public function testJmsSerializerServiceSupersedesSerializerService()
    {
        $this->container->register('jms_serializer.serializer', 'JMS\Serializer\Serializer');
        $this->container->register('serializer', 'Symfony\Component\Serializer\Serializer');

        $compiler = new SerializerConfigurationPass();
        $compiler->process($this->container);

        $this->assertSame('fos_rest.serializer.jms', (string) $this->container->getAlias('fos_rest.serializer'));
    }

    public function testSerializerServiceCanBeJmsSerializer()
    {
        $this->container->register('jms_serializer.serializer', 'JMS\Serializer\Serializer');
        $this->container->register('serializer', 'JMS\Serializer\Serializer');

        $compiler = new SerializerConfigurationPass();
        $compiler->process($this->container);

        $this->assertSame('fos_rest.serializer.jms', (string) $this->container->getAlias('fos_rest.serializer'));
    }
}
=======
<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Tests\DependencyInjection\Compiler;

use FOS\RestBundle\DependencyInjection\Compiler\SerializerConfigurationPass;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * SerializerConfigurationPassTest test.
 */
class SerializerConfigurationPassTest extends TestCase
{
    /**
     * @var ContainerBuilder
     */
    private $container;

    protected function setUp()
    {
        $this->container = new ContainerBuilder();
    }

    public function testShouldDoNothingIfSerializerIsFound()
    {
        $serializer = $this->getMockBuilder('FOS\RestBundle\Serializer\Serializer')->getMock();
        $this->container->register('fos_rest.serializer', get_class($serializer));

        $compiler = new SerializerConfigurationPass();
        $compiler->process($this->container);

        $this->assertSame(get_class($serializer), $this->container->getDefinition('fos_rest.serializer')->getClass());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testShouldThrowInvalidArgumentExceptionWhenNoSerializerIsFound()
    {
        $compiler = new SerializerConfigurationPass();
        $compiler->process($this->container);
    }

    public function testShouldConfigureJMSSerializer()
    {
        $this->container->register('jms_serializer.serializer', 'JMS\Serializer\Serializer');

        $compiler = new SerializerConfigurationPass();
        $compiler->process($this->container);

        $this->assertSame('fos_rest.serializer.jms', (string) $this->container->getAlias('fos_rest.serializer'));
    }

    public function testShouldConfigureCoreSerializer()
    {
        $this->container->register('serializer', 'Symfony\Component\Serializer\Serializer');
        $this->container->register('fos_rest.serializer.exception_normalizer.jms');

        $compiler = new SerializerConfigurationPass();
        $compiler->process($this->container);

        $this->assertSame('fos_rest.serializer.symfony', (string) $this->container->getAlias('fos_rest.serializer'));
        $this->assertFalse($this->container->has('fos_rest.serializer.exception_normalizer.jms'));
    }

    public function testJmsSerializerServiceSupersedesSerializerService()
    {
        $this->container->register('jms_serializer.serializer', 'JMS\Serializer\Serializer');
        $this->container->register('serializer', 'Symfony\Component\Serializer\Serializer');

        $compiler = new SerializerConfigurationPass();
        $compiler->process($this->container);

        $this->assertSame('fos_rest.serializer.jms', (string) $this->container->getAlias('fos_rest.serializer'));
    }

    public function testSerializerServiceCanBeJmsSerializer()
    {
        $this->container->register('jms_serializer.serializer', 'JMS\Serializer\Serializer');
        $this->container->register('serializer', 'JMS\Serializer\Serializer');

        $compiler = new SerializerConfigurationPass();
        $compiler->process($this->container);

        $this->assertSame('fos_rest.serializer.jms', (string) $this->container->getAlias('fos_rest.serializer'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
