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

namespace Symfony\Component\EventDispatcher\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\Argument\ServiceClosureArgument;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass;

class RegisterListenersPassTest extends TestCase
{
    /**
     * Tests that event subscribers not implementing EventSubscriberInterface
     * trigger an exception.
     *
     * @expectedException \InvalidArgumentException
     */
    public function testEventSubscriberWithoutInterface()
    {
        $builder = new ContainerBuilder();
        $builder->register('event_dispatcher');
        $builder->register('my_event_subscriber', 'stdClass')
            ->addTag('kernel.event_subscriber');

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($builder);
    }

    public function testValidEventSubscriber()
    {
        $services = [
            'my_event_subscriber' => [0 => []],
        ];

        $builder = new ContainerBuilder();
        $eventDispatcherDefinition = $builder->register('event_dispatcher');
        $builder->register('my_event_subscriber', 'Symfony\Component\EventDispatcher\Tests\DependencyInjection\SubscriberService')
            ->addTag('kernel.event_subscriber');

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($builder);

        $expectedCalls = [
            [
                'addListener',
                [
                    'event',
                    [new ServiceClosureArgument(new Reference('my_event_subscriber')), 'onEvent'],
                    0,
                ],
            ],
        ];
        $this->assertEquals($expectedCalls, $eventDispatcherDefinition->getMethodCalls());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The service "foo" tagged "kernel.event_listener" must not be abstract.
     */
    public function testAbstractEventListener()
    {
        $container = new ContainerBuilder();
        $container->register('foo', 'stdClass')->setAbstract(true)->addTag('kernel.event_listener', []);
        $container->register('event_dispatcher', 'stdClass');

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($container);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The service "foo" tagged "kernel.event_subscriber" must not be abstract.
     */
    public function testAbstractEventSubscriber()
    {
        $container = new ContainerBuilder();
        $container->register('foo', 'stdClass')->setAbstract(true)->addTag('kernel.event_subscriber', []);
        $container->register('event_dispatcher', 'stdClass');

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($container);
    }

    public function testEventSubscriberResolvableClassName()
    {
        $container = new ContainerBuilder();

        $container->setParameter('subscriber.class', 'Symfony\Component\EventDispatcher\Tests\DependencyInjection\SubscriberService');
        $container->register('foo', '%subscriber.class%')->addTag('kernel.event_subscriber', []);
        $container->register('event_dispatcher', 'stdClass');

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($container);

        $definition = $container->getDefinition('event_dispatcher');
        $expectedCalls = [
            [
                'addListener',
                [
                    'event',
                    [new ServiceClosureArgument(new Reference('foo')), 'onEvent'],
                    0,
                ],
            ],
        ];
        $this->assertEquals($expectedCalls, $definition->getMethodCalls());
    }

    public function testHotPathEvents()
    {
        $container = new ContainerBuilder();

        $container->register('foo', SubscriberService::class)->addTag('kernel.event_subscriber', []);
        $container->register('event_dispatcher', 'stdClass');

        (new RegisterListenersPass())->setHotPathEvents(['event'])->process($container);

        $this->assertTrue($container->getDefinition('foo')->hasTag('container.hot_path'));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You have requested a non-existent parameter "subscriber.class"
     */
    public function testEventSubscriberUnresolvableClassName()
    {
        $container = new ContainerBuilder();
        $container->register('foo', '%subscriber.class%')->addTag('kernel.event_subscriber', []);
        $container->register('event_dispatcher', 'stdClass');

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($container);
    }

    public function testInvokableEventListener()
    {
        $container = new ContainerBuilder();
        $container->register('foo', \stdClass::class)->addTag('kernel.event_listener', ['event' => 'foo.bar']);
        $container->register('bar', InvokableListenerService::class)->addTag('kernel.event_listener', ['event' => 'foo.bar']);
        $container->register('baz', InvokableListenerService::class)->addTag('kernel.event_listener', ['event' => 'event']);
        $container->register('event_dispatcher', \stdClass::class);

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($container);

        $definition = $container->getDefinition('event_dispatcher');
        $expectedCalls = [
            [
                'addListener',
                [
                    'foo.bar',
                    [new ServiceClosureArgument(new Reference('foo')), 'onFooBar'],
                    0,
                ],
            ],
            [
                'addListener',
                [
                    'foo.bar',
                    [new ServiceClosureArgument(new Reference('bar')), '__invoke'],
                    0,
                ],
            ],
            [
                'addListener',
                [
                    'event',
                    [new ServiceClosureArgument(new Reference('baz')), 'onEvent'],
                    0,
                ],
            ],
        ];
        $this->assertEquals($expectedCalls, $definition->getMethodCalls());
    }
}

class SubscriberService implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            'event' => 'onEvent',
        ];
    }
}

class InvokableListenerService
{
    public function __invoke()
    {
    }

    public function onEvent()
    {
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

namespace Symfony\Component\EventDispatcher\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\Argument\ServiceClosureArgument;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass;

class RegisterListenersPassTest extends TestCase
{
    /**
     * Tests that event subscribers not implementing EventSubscriberInterface
     * trigger an exception.
     *
     * @expectedException \InvalidArgumentException
     */
    public function testEventSubscriberWithoutInterface()
    {
        $builder = new ContainerBuilder();
        $builder->register('event_dispatcher');
        $builder->register('my_event_subscriber', 'stdClass')
            ->addTag('kernel.event_subscriber');

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($builder);
    }

    public function testValidEventSubscriber()
    {
        $services = [
            'my_event_subscriber' => [0 => []],
        ];

        $builder = new ContainerBuilder();
        $eventDispatcherDefinition = $builder->register('event_dispatcher');
        $builder->register('my_event_subscriber', 'Symfony\Component\EventDispatcher\Tests\DependencyInjection\SubscriberService')
            ->addTag('kernel.event_subscriber');

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($builder);

        $expectedCalls = [
            [
                'addListener',
                [
                    'event',
                    [new ServiceClosureArgument(new Reference('my_event_subscriber')), 'onEvent'],
                    0,
                ],
            ],
        ];
        $this->assertEquals($expectedCalls, $eventDispatcherDefinition->getMethodCalls());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The service "foo" tagged "kernel.event_listener" must not be abstract.
     */
    public function testAbstractEventListener()
    {
        $container = new ContainerBuilder();
        $container->register('foo', 'stdClass')->setAbstract(true)->addTag('kernel.event_listener', []);
        $container->register('event_dispatcher', 'stdClass');

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($container);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The service "foo" tagged "kernel.event_subscriber" must not be abstract.
     */
    public function testAbstractEventSubscriber()
    {
        $container = new ContainerBuilder();
        $container->register('foo', 'stdClass')->setAbstract(true)->addTag('kernel.event_subscriber', []);
        $container->register('event_dispatcher', 'stdClass');

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($container);
    }

    public function testEventSubscriberResolvableClassName()
    {
        $container = new ContainerBuilder();

        $container->setParameter('subscriber.class', 'Symfony\Component\EventDispatcher\Tests\DependencyInjection\SubscriberService');
        $container->register('foo', '%subscriber.class%')->addTag('kernel.event_subscriber', []);
        $container->register('event_dispatcher', 'stdClass');

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($container);

        $definition = $container->getDefinition('event_dispatcher');
        $expectedCalls = [
            [
                'addListener',
                [
                    'event',
                    [new ServiceClosureArgument(new Reference('foo')), 'onEvent'],
                    0,
                ],
            ],
        ];
        $this->assertEquals($expectedCalls, $definition->getMethodCalls());
    }

    public function testHotPathEvents()
    {
        $container = new ContainerBuilder();

        $container->register('foo', SubscriberService::class)->addTag('kernel.event_subscriber', []);
        $container->register('event_dispatcher', 'stdClass');

        (new RegisterListenersPass())->setHotPathEvents(['event'])->process($container);

        $this->assertTrue($container->getDefinition('foo')->hasTag('container.hot_path'));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You have requested a non-existent parameter "subscriber.class"
     */
    public function testEventSubscriberUnresolvableClassName()
    {
        $container = new ContainerBuilder();
        $container->register('foo', '%subscriber.class%')->addTag('kernel.event_subscriber', []);
        $container->register('event_dispatcher', 'stdClass');

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($container);
    }

    public function testInvokableEventListener()
    {
        $container = new ContainerBuilder();
        $container->register('foo', \stdClass::class)->addTag('kernel.event_listener', ['event' => 'foo.bar']);
        $container->register('bar', InvokableListenerService::class)->addTag('kernel.event_listener', ['event' => 'foo.bar']);
        $container->register('baz', InvokableListenerService::class)->addTag('kernel.event_listener', ['event' => 'event']);
        $container->register('event_dispatcher', \stdClass::class);

        $registerListenersPass = new RegisterListenersPass();
        $registerListenersPass->process($container);

        $definition = $container->getDefinition('event_dispatcher');
        $expectedCalls = [
            [
                'addListener',
                [
                    'foo.bar',
                    [new ServiceClosureArgument(new Reference('foo')), 'onFooBar'],
                    0,
                ],
            ],
            [
                'addListener',
                [
                    'foo.bar',
                    [new ServiceClosureArgument(new Reference('bar')), '__invoke'],
                    0,
                ],
            ],
            [
                'addListener',
                [
                    'event',
                    [new ServiceClosureArgument(new Reference('baz')), 'onEvent'],
                    0,
                ],
            ],
        ];
        $this->assertEquals($expectedCalls, $definition->getMethodCalls());
    }
}

class SubscriberService implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            'event' => 'onEvent',
        ];
    }
}

class InvokableListenerService
{
    public function __invoke()
    {
    }

    public function onEvent()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
