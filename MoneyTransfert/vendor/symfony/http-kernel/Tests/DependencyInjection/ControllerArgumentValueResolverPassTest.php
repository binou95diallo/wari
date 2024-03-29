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

namespace Symfony\Component\HttpKernel\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\DependencyInjection\ControllerArgumentValueResolverPass;
use Symfony\Component\Stopwatch\Stopwatch;

class ControllerArgumentValueResolverPassTest extends TestCase
{
    public function testServicesAreOrderedAccordingToPriority()
    {
        $services = [
            'n3' => [[]],
            'n1' => [['priority' => 200]],
            'n2' => [['priority' => 100]],
        ];

        $expected = [
            new Reference('n1'),
            new Reference('n2'),
            new Reference('n3'),
        ];

        $definition = new Definition(ArgumentResolver::class, [null, []]);
        $container = new ContainerBuilder();
        $container->setDefinition('argument_resolver', $definition);

        foreach ($services as $id => list($tag)) {
            $container->register($id)->addTag('controller.argument_value_resolver', $tag);
        }

        $container->setParameter('kernel.debug', false);

        (new ControllerArgumentValueResolverPass())->process($container);
        $this->assertEquals($expected, $definition->getArgument(1)->getValues());

        $this->assertFalse($container->hasDefinition('n1.traceable'));
        $this->assertFalse($container->hasDefinition('n2.traceable'));
        $this->assertFalse($container->hasDefinition('n3.traceable'));
    }

    public function testInDebugWithStopWatchDefinition()
    {
        $services = [
            'n3' => [[]],
            'n1' => [['priority' => 200]],
            'n2' => [['priority' => 100]],
        ];

        $expected = [
            new Reference('n1'),
            new Reference('n2'),
            new Reference('n3'),
        ];

        $definition = new Definition(ArgumentResolver::class, [null, []]);
        $container = new ContainerBuilder();
        $container->register('debug.stopwatch', Stopwatch::class);
        $container->setDefinition('argument_resolver', $definition);

        foreach ($services as $id => list($tag)) {
            $container->register($id)->addTag('controller.argument_value_resolver', $tag);
        }

        $container->setParameter('kernel.debug', true);

        (new ControllerArgumentValueResolverPass())->process($container);
        $this->assertEquals($expected, $definition->getArgument(1)->getValues());

        $this->assertTrue($container->hasDefinition('debug.n1'));
        $this->assertTrue($container->hasDefinition('debug.n2'));
        $this->assertTrue($container->hasDefinition('debug.n3'));

        $this->assertTrue($container->hasDefinition('n1'));
        $this->assertTrue($container->hasDefinition('n2'));
        $this->assertTrue($container->hasDefinition('n3'));
    }

    public function testInDebugWithouStopWatchDefinition()
    {
        $expected = [new Reference('n1')];

        $definition = new Definition(ArgumentResolver::class, [null, []]);
        $container = new ContainerBuilder();
        $container->register('n1')->addTag('controller.argument_value_resolver');
        $container->setDefinition('argument_resolver', $definition);

        $container->setParameter('kernel.debug', true);

        (new ControllerArgumentValueResolverPass())->process($container);
        $this->assertEquals($expected, $definition->getArgument(1)->getValues());

        $this->assertFalse($container->hasDefinition('debug.n1'));
        $this->assertTrue($container->hasDefinition('n1'));
    }

    public function testReturningEmptyArrayWhenNoService()
    {
        $definition = new Definition(ArgumentResolver::class, [null, []]);
        $container = new ContainerBuilder();
        $container->setDefinition('argument_resolver', $definition);

        $container->setParameter('kernel.debug', false);

        (new ControllerArgumentValueResolverPass())->process($container);
        $this->assertEquals([], $definition->getArgument(1)->getValues());
    }

    public function testNoArgumentResolver()
    {
        $container = new ContainerBuilder();

        (new ControllerArgumentValueResolverPass())->process($container);

        $this->assertFalse($container->hasDefinition('argument_resolver'));
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

namespace Symfony\Component\HttpKernel\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\DependencyInjection\ControllerArgumentValueResolverPass;
use Symfony\Component\Stopwatch\Stopwatch;

class ControllerArgumentValueResolverPassTest extends TestCase
{
    public function testServicesAreOrderedAccordingToPriority()
    {
        $services = [
            'n3' => [[]],
            'n1' => [['priority' => 200]],
            'n2' => [['priority' => 100]],
        ];

        $expected = [
            new Reference('n1'),
            new Reference('n2'),
            new Reference('n3'),
        ];

        $definition = new Definition(ArgumentResolver::class, [null, []]);
        $container = new ContainerBuilder();
        $container->setDefinition('argument_resolver', $definition);

        foreach ($services as $id => list($tag)) {
            $container->register($id)->addTag('controller.argument_value_resolver', $tag);
        }

        $container->setParameter('kernel.debug', false);

        (new ControllerArgumentValueResolverPass())->process($container);
        $this->assertEquals($expected, $definition->getArgument(1)->getValues());

        $this->assertFalse($container->hasDefinition('n1.traceable'));
        $this->assertFalse($container->hasDefinition('n2.traceable'));
        $this->assertFalse($container->hasDefinition('n3.traceable'));
    }

    public function testInDebugWithStopWatchDefinition()
    {
        $services = [
            'n3' => [[]],
            'n1' => [['priority' => 200]],
            'n2' => [['priority' => 100]],
        ];

        $expected = [
            new Reference('n1'),
            new Reference('n2'),
            new Reference('n3'),
        ];

        $definition = new Definition(ArgumentResolver::class, [null, []]);
        $container = new ContainerBuilder();
        $container->register('debug.stopwatch', Stopwatch::class);
        $container->setDefinition('argument_resolver', $definition);

        foreach ($services as $id => list($tag)) {
            $container->register($id)->addTag('controller.argument_value_resolver', $tag);
        }

        $container->setParameter('kernel.debug', true);

        (new ControllerArgumentValueResolverPass())->process($container);
        $this->assertEquals($expected, $definition->getArgument(1)->getValues());

        $this->assertTrue($container->hasDefinition('debug.n1'));
        $this->assertTrue($container->hasDefinition('debug.n2'));
        $this->assertTrue($container->hasDefinition('debug.n3'));

        $this->assertTrue($container->hasDefinition('n1'));
        $this->assertTrue($container->hasDefinition('n2'));
        $this->assertTrue($container->hasDefinition('n3'));
    }

    public function testInDebugWithouStopWatchDefinition()
    {
        $expected = [new Reference('n1')];

        $definition = new Definition(ArgumentResolver::class, [null, []]);
        $container = new ContainerBuilder();
        $container->register('n1')->addTag('controller.argument_value_resolver');
        $container->setDefinition('argument_resolver', $definition);

        $container->setParameter('kernel.debug', true);

        (new ControllerArgumentValueResolverPass())->process($container);
        $this->assertEquals($expected, $definition->getArgument(1)->getValues());

        $this->assertFalse($container->hasDefinition('debug.n1'));
        $this->assertTrue($container->hasDefinition('n1'));
    }

    public function testReturningEmptyArrayWhenNoService()
    {
        $definition = new Definition(ArgumentResolver::class, [null, []]);
        $container = new ContainerBuilder();
        $container->setDefinition('argument_resolver', $definition);

        $container->setParameter('kernel.debug', false);

        (new ControllerArgumentValueResolverPass())->process($container);
        $this->assertEquals([], $definition->getArgument(1)->getValues());
    }

    public function testNoArgumentResolver()
    {
        $container = new ContainerBuilder();

        (new ControllerArgumentValueResolverPass())->process($container);

        $this->assertFalse($container->hasDefinition('argument_resolver'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
