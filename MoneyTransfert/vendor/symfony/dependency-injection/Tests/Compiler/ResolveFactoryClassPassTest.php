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

namespace Symfony\Component\DependencyInjection\Tests\Compiler;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\Compiler\ResolveFactoryClassPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

class ResolveFactoryClassPassTest extends TestCase
{
    public function testProcess()
    {
        $container = new ContainerBuilder();

        $factory = $container->register('factory', 'Foo\Bar');
        $factory->setFactory([null, 'create']);

        $pass = new ResolveFactoryClassPass();
        $pass->process($container);

        $this->assertSame(['Foo\Bar', 'create'], $factory->getFactory());
    }

    public function testInlinedDefinitionFactoryIsProcessed()
    {
        $container = new ContainerBuilder();

        $factory = $container->register('factory');
        $factory->setFactory([(new Definition('Baz\Qux'))->setFactory([null, 'getInstance']), 'create']);

        $pass = new ResolveFactoryClassPass();
        $pass->process($container);

        $this->assertSame(['Baz\Qux', 'getInstance'], $factory->getFactory()[0]->getFactory());
    }

    public function provideFulfilledFactories()
    {
        return [
            [['Foo\Bar', 'create']],
            [[new Reference('foo'), 'create']],
            [[new Definition('Baz'), 'create']],
        ];
    }

    /**
     * @dataProvider provideFulfilledFactories
     */
    public function testIgnoresFulfilledFactories($factory)
    {
        $container = new ContainerBuilder();
        $definition = new Definition();
        $definition->setFactory($factory);

        $container->setDefinition('factory', $definition);

        $pass = new ResolveFactoryClassPass();
        $pass->process($container);

        $this->assertSame($factory, $container->getDefinition('factory')->getFactory());
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage The "factory" service is defined to be created by a factory, but is missing the factory class. Did you forget to define the factory or service class?
     */
    public function testNotAnyClassThrowsException()
    {
        $container = new ContainerBuilder();

        $factory = $container->register('factory');
        $factory->setFactory([null, 'create']);

        $pass = new ResolveFactoryClassPass();
        $pass->process($container);
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

namespace Symfony\Component\DependencyInjection\Tests\Compiler;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\Compiler\ResolveFactoryClassPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

class ResolveFactoryClassPassTest extends TestCase
{
    public function testProcess()
    {
        $container = new ContainerBuilder();

        $factory = $container->register('factory', 'Foo\Bar');
        $factory->setFactory([null, 'create']);

        $pass = new ResolveFactoryClassPass();
        $pass->process($container);

        $this->assertSame(['Foo\Bar', 'create'], $factory->getFactory());
    }

    public function testInlinedDefinitionFactoryIsProcessed()
    {
        $container = new ContainerBuilder();

        $factory = $container->register('factory');
        $factory->setFactory([(new Definition('Baz\Qux'))->setFactory([null, 'getInstance']), 'create']);

        $pass = new ResolveFactoryClassPass();
        $pass->process($container);

        $this->assertSame(['Baz\Qux', 'getInstance'], $factory->getFactory()[0]->getFactory());
    }

    public function provideFulfilledFactories()
    {
        return [
            [['Foo\Bar', 'create']],
            [[new Reference('foo'), 'create']],
            [[new Definition('Baz'), 'create']],
        ];
    }

    /**
     * @dataProvider provideFulfilledFactories
     */
    public function testIgnoresFulfilledFactories($factory)
    {
        $container = new ContainerBuilder();
        $definition = new Definition();
        $definition->setFactory($factory);

        $container->setDefinition('factory', $definition);

        $pass = new ResolveFactoryClassPass();
        $pass->process($container);

        $this->assertSame($factory, $container->getDefinition('factory')->getFactory());
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage The "factory" service is defined to be created by a factory, but is missing the factory class. Did you forget to define the factory or service class?
     */
    public function testNotAnyClassThrowsException()
    {
        $container = new ContainerBuilder();

        $factory = $container->register('factory');
        $factory->setFactory([null, 'create']);

        $pass = new ResolveFactoryClassPass();
        $pass->process($container);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
