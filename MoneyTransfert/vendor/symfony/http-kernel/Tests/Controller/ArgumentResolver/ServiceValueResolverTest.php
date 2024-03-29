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

namespace Symfony\Component\HttpKernel\Tests\Controller\ArgumentResolver;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ServiceLocator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

class ServiceValueResolverTest extends TestCase
{
    public function testDoNotSupportWhenControllerDoNotExists()
    {
        $resolver = new ServiceValueResolver(new ServiceLocator([]));
        $argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);
        $request = $this->requestWithAttributes(['_controller' => 'my_controller']);

        $this->assertFalse($resolver->supports($request, $argument));
    }

    public function testExistingController()
    {
        $resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\Controller\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));

        $request = $this->requestWithAttributes(['_controller' => 'App\\Controller\\Mine::method']);
        $argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        $this->assertTrue($resolver->supports($request, $argument));
        $this->assertYieldEquals([new DummyService()], $resolver->resolve($request, $argument));
    }

    public function testExistingControllerWithATrailingBackSlash()
    {
        $resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\Controller\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));

        $request = $this->requestWithAttributes(['_controller' => '\\App\\Controller\\Mine::method']);
        $argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        $this->assertTrue($resolver->supports($request, $argument));
        $this->assertYieldEquals([new DummyService()], $resolver->resolve($request, $argument));
    }

    public function testExistingControllerWithMethodNameStartUppercase()
    {
        $resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\Controller\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));
        $request = $this->requestWithAttributes(['_controller' => 'App\\Controller\\Mine::Method']);
        $argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        $this->assertTrue($resolver->supports($request, $argument));
        $this->assertYieldEquals([new DummyService()], $resolver->resolve($request, $argument));
    }

    public function testControllerNameIsAnArray()
    {
        $resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\Controller\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));

        $request = $this->requestWithAttributes(['_controller' => ['App\\Controller\\Mine', 'method']]);
        $argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        $this->assertTrue($resolver->supports($request, $argument));
        $this->assertYieldEquals([new DummyService()], $resolver->resolve($request, $argument));
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Cannot autowire argument $dummy of "Symfony\Component\HttpKernel\Tests\Controller\ArgumentResolver\DummyController::index()": it references class "Symfony\Component\HttpKernel\Tests\Controller\ArgumentResolver\DummyService" but no such service exists.
     */
    public function testErrorIsTruncated()
    {
        $container = new ContainerBuilder();
        $container->addCompilerPass(new RegisterControllerArgumentLocatorsPass());

        $container->register('argument_resolver.service', ServiceValueResolver::class)->addArgument(null)->setPublic(true);
        $container->register(DummyController::class)->addTag('controller.service_arguments')->setPublic(true);

        $container->compile();

        $request = $this->requestWithAttributes(['_controller' => [DummyController::class, 'index']]);
        $argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);
        $container->get('argument_resolver.service')->resolve($request, $argument)->current();
    }

    private function requestWithAttributes(array $attributes)
    {
        $request = Request::create('/');

        foreach ($attributes as $name => $value) {
            $request->attributes->set($name, $value);
        }

        return $request;
    }

    private function assertYieldEquals(array $expected, \Generator $generator)
    {
        $args = [];
        foreach ($generator as $arg) {
            $args[] = $arg;
        }

        $this->assertEquals($expected, $args);
    }
}

class DummyService
{
}

class DummyController
{
    public function index(DummyService $dummy)
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

namespace Symfony\Component\HttpKernel\Tests\Controller\ArgumentResolver;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ServiceLocator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

class ServiceValueResolverTest extends TestCase
{
    public function testDoNotSupportWhenControllerDoNotExists()
    {
        $resolver = new ServiceValueResolver(new ServiceLocator([]));
        $argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);
        $request = $this->requestWithAttributes(['_controller' => 'my_controller']);

        $this->assertFalse($resolver->supports($request, $argument));
    }

    public function testExistingController()
    {
        $resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\Controller\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));

        $request = $this->requestWithAttributes(['_controller' => 'App\\Controller\\Mine::method']);
        $argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        $this->assertTrue($resolver->supports($request, $argument));
        $this->assertYieldEquals([new DummyService()], $resolver->resolve($request, $argument));
    }

    public function testExistingControllerWithATrailingBackSlash()
    {
        $resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\Controller\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));

        $request = $this->requestWithAttributes(['_controller' => '\\App\\Controller\\Mine::method']);
        $argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        $this->assertTrue($resolver->supports($request, $argument));
        $this->assertYieldEquals([new DummyService()], $resolver->resolve($request, $argument));
    }

    public function testExistingControllerWithMethodNameStartUppercase()
    {
        $resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\Controller\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));
        $request = $this->requestWithAttributes(['_controller' => 'App\\Controller\\Mine::Method']);
        $argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        $this->assertTrue($resolver->supports($request, $argument));
        $this->assertYieldEquals([new DummyService()], $resolver->resolve($request, $argument));
    }

    public function testControllerNameIsAnArray()
    {
        $resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\Controller\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));

        $request = $this->requestWithAttributes(['_controller' => ['App\\Controller\\Mine', 'method']]);
        $argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        $this->assertTrue($resolver->supports($request, $argument));
        $this->assertYieldEquals([new DummyService()], $resolver->resolve($request, $argument));
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Cannot autowire argument $dummy of "Symfony\Component\HttpKernel\Tests\Controller\ArgumentResolver\DummyController::index()": it references class "Symfony\Component\HttpKernel\Tests\Controller\ArgumentResolver\DummyService" but no such service exists.
     */
    public function testErrorIsTruncated()
    {
        $container = new ContainerBuilder();
        $container->addCompilerPass(new RegisterControllerArgumentLocatorsPass());

        $container->register('argument_resolver.service', ServiceValueResolver::class)->addArgument(null)->setPublic(true);
        $container->register(DummyController::class)->addTag('controller.service_arguments')->setPublic(true);

        $container->compile();

        $request = $this->requestWithAttributes(['_controller' => [DummyController::class, 'index']]);
        $argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);
        $container->get('argument_resolver.service')->resolve($request, $argument)->current();
    }

    private function requestWithAttributes(array $attributes)
    {
        $request = Request::create('/');

        foreach ($attributes as $name => $value) {
            $request->attributes->set($name, $value);
        }

        return $request;
    }

    private function assertYieldEquals(array $expected, \Generator $generator)
    {
        $args = [];
        foreach ($generator as $arg) {
            $args[] = $arg;
        }

        $this->assertEquals($expected, $args);
    }
}

class DummyService
{
}

class DummyController
{
    public function index(DummyService $dummy)
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
