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
use Symfony\Component\DependencyInjection\Compiler\AutowireRequiredMethodsPass;
use Symfony\Component\DependencyInjection\Compiler\ResolveClassPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

require_once __DIR__.'/../Fixtures/includes/autowiring_classes.php';

class AutowireRequiredMethodsPassTest extends TestCase
{
    public function testSetterInjection()
    {
        $container = new ContainerBuilder();
        $container->register(Foo::class);
        $container->register(A::class);
        $container->register(CollisionA::class);
        $container->register(CollisionB::class);

        // manually configure *one* call, to override autowiring
        $container
            ->register('setter_injection', SetterInjection::class)
            ->setAutowired(true)
            ->addMethodCall('setWithCallsConfigured', ['manual_arg1', 'manual_arg2']);

        (new ResolveClassPass())->process($container);
        (new AutowireRequiredMethodsPass())->process($container);

        $methodCalls = $container->getDefinition('setter_injection')->getMethodCalls();

        $this->assertEquals(
            ['setWithCallsConfigured', 'setFoo', 'setDependencies', 'setChildMethodWithoutDocBlock'],
            array_column($methodCalls, 0)
        );

        // test setWithCallsConfigured args
        $this->assertEquals(
            ['manual_arg1', 'manual_arg2'],
            $methodCalls[0][1]
        );
        // test setFoo args
        $this->assertEquals([], $methodCalls[1][1]);
    }

    public function testExplicitMethodInjection()
    {
        $container = new ContainerBuilder();
        $container->register(Foo::class);
        $container->register(A::class);
        $container->register(CollisionA::class);
        $container->register(CollisionB::class);

        $container
            ->register('setter_injection', SetterInjection::class)
            ->setAutowired(true)
            ->addMethodCall('notASetter', []);

        (new ResolveClassPass())->process($container);
        (new AutowireRequiredMethodsPass())->process($container);

        $methodCalls = $container->getDefinition('setter_injection')->getMethodCalls();

        $this->assertEquals(
            ['notASetter', 'setFoo', 'setDependencies', 'setWithCallsConfigured', 'setChildMethodWithoutDocBlock'],
            array_column($methodCalls, 0)
        );
        $this->assertEquals([], $methodCalls[0][1]);
    }

    public function testWitherInjection()
    {
        $container = new ContainerBuilder();
        $container->register(Foo::class);

        $container
            ->register('wither', Wither::class)
            ->setAutowired(true);

        (new ResolveClassPass())->process($container);
        (new AutowireRequiredMethodsPass())->process($container);

        $methodCalls = $container->getDefinition('wither')->getMethodCalls();

        $expected = [
            ['withFoo1', [], true],
            ['withFoo2', [], true],
            ['setFoo', []],
        ];
        $this->assertSame($expected, $methodCalls);
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
use Symfony\Component\DependencyInjection\Compiler\AutowireRequiredMethodsPass;
use Symfony\Component\DependencyInjection\Compiler\ResolveClassPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

require_once __DIR__.'/../Fixtures/includes/autowiring_classes.php';

class AutowireRequiredMethodsPassTest extends TestCase
{
    public function testSetterInjection()
    {
        $container = new ContainerBuilder();
        $container->register(Foo::class);
        $container->register(A::class);
        $container->register(CollisionA::class);
        $container->register(CollisionB::class);

        // manually configure *one* call, to override autowiring
        $container
            ->register('setter_injection', SetterInjection::class)
            ->setAutowired(true)
            ->addMethodCall('setWithCallsConfigured', ['manual_arg1', 'manual_arg2']);

        (new ResolveClassPass())->process($container);
        (new AutowireRequiredMethodsPass())->process($container);

        $methodCalls = $container->getDefinition('setter_injection')->getMethodCalls();

        $this->assertEquals(
            ['setWithCallsConfigured', 'setFoo', 'setDependencies', 'setChildMethodWithoutDocBlock'],
            array_column($methodCalls, 0)
        );

        // test setWithCallsConfigured args
        $this->assertEquals(
            ['manual_arg1', 'manual_arg2'],
            $methodCalls[0][1]
        );
        // test setFoo args
        $this->assertEquals([], $methodCalls[1][1]);
    }

    public function testExplicitMethodInjection()
    {
        $container = new ContainerBuilder();
        $container->register(Foo::class);
        $container->register(A::class);
        $container->register(CollisionA::class);
        $container->register(CollisionB::class);

        $container
            ->register('setter_injection', SetterInjection::class)
            ->setAutowired(true)
            ->addMethodCall('notASetter', []);

        (new ResolveClassPass())->process($container);
        (new AutowireRequiredMethodsPass())->process($container);

        $methodCalls = $container->getDefinition('setter_injection')->getMethodCalls();

        $this->assertEquals(
            ['notASetter', 'setFoo', 'setDependencies', 'setWithCallsConfigured', 'setChildMethodWithoutDocBlock'],
            array_column($methodCalls, 0)
        );
        $this->assertEquals([], $methodCalls[0][1]);
    }

    public function testWitherInjection()
    {
        $container = new ContainerBuilder();
        $container->register(Foo::class);

        $container
            ->register('wither', Wither::class)
            ->setAutowired(true);

        (new ResolveClassPass())->process($container);
        (new AutowireRequiredMethodsPass())->process($container);

        $methodCalls = $container->getDefinition('wither')->getMethodCalls();

        $expected = [
            ['withFoo1', [], true],
            ['withFoo2', [], true],
            ['setFoo', []],
        ];
        $this->assertSame($expected, $methodCalls);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
