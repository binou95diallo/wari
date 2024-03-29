<<<<<<< HEAD
<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class Symfony_DI_PhpDumper_Test_Almost_Circular_Private extends Container
{
    private $parameters;
    private $targetDirs = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'bar2' => 'getBar2Service',
            'bar3' => 'getBar3Service',
            'baz6' => 'getBaz6Service',
            'connection' => 'getConnectionService',
            'connection2' => 'getConnection2Service',
            'foo' => 'getFooService',
            'foo2' => 'getFoo2Service',
            'foo5' => 'getFoo5Service',
            'foo6' => 'getFoo6Service',
            'foobar4' => 'getFoobar4Service',
            'logger' => 'getLoggerService',
            'manager' => 'getManagerService',
            'manager2' => 'getManager2Service',
            'root' => 'getRootService',
            'subscriber' => 'getSubscriberService',
        ];

        $this->aliases = [];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'bar' => true,
            'bar5' => true,
            'bar6' => true,
            'config' => true,
            'config2' => true,
            'dispatcher' => true,
            'dispatcher2' => true,
            'foo4' => true,
            'foobar' => true,
            'foobar2' => true,
            'foobar3' => true,
            'level2' => true,
            'level3' => true,
            'level4' => true,
            'level5' => true,
            'level6' => true,
            'logger2' => true,
            'multiuse1' => true,
            'subscriber2' => true,
        ];
    }

    /**
     * Gets the public 'bar2' shared service.
     *
     * @return \BarCircular
     */
    protected function getBar2Service()
    {
        $this->services['bar2'] = $instance = new \BarCircular();

        $instance->addFoobar(new \FoobarCircular(($this->services['foo2'] ?? $this->getFoo2Service())));

        return $instance;
    }

    /**
     * Gets the public 'bar3' shared service.
     *
     * @return \BarCircular
     */
    protected function getBar3Service()
    {
        $this->services['bar3'] = $instance = new \BarCircular();

        $a = new \FoobarCircular();

        $instance->addFoobar($a, $a);

        return $instance;
    }

    /**
     * Gets the public 'baz6' shared service.
     *
     * @return \stdClass
     */
    protected function getBaz6Service()
    {
        $this->services['baz6'] = $instance = new \stdClass();

        $instance->bar6 = ($this->privates['bar6'] ?? $this->getBar6Service());

        return $instance;
    }

    /**
     * Gets the public 'connection' shared service.
     *
     * @return \stdClass
     */
    protected function getConnectionService()
    {
        $a = new \stdClass();

        $b = new \stdClass();

        $this->services['connection'] = $instance = new \stdClass($a, $b);

        $b->logger = ($this->services['logger'] ?? $this->getLoggerService());

        $a->subscriber = ($this->services['subscriber'] ?? $this->getSubscriberService());

        return $instance;
    }

    /**
     * Gets the public 'connection2' shared service.
     *
     * @return \stdClass
     */
    protected function getConnection2Service()
    {
        $a = new \stdClass();

        $b = new \stdClass();

        $this->services['connection2'] = $instance = new \stdClass($a, $b);

        $c = new \stdClass($instance);

        $d = ($this->services['manager2'] ?? $this->getManager2Service());

        $c->handler2 = new \stdClass($d);

        $b->logger2 = $c;

        $a->subscriber2 = new \stdClass($d);

        return $instance;
    }

    /**
     * Gets the public 'foo' shared service.
     *
     * @return \FooCircular
     */
    protected function getFooService()
    {
        $a = new \BarCircular();

        $this->services['foo'] = $instance = new \FooCircular($a);

        $a->addFoobar(new \FoobarCircular($instance));

        return $instance;
    }

    /**
     * Gets the public 'foo2' shared service.
     *
     * @return \FooCircular
     */
    protected function getFoo2Service()
    {
        $a = ($this->services['bar2'] ?? $this->getBar2Service());

        if (isset($this->services['foo2'])) {
            return $this->services['foo2'];
        }

        return $this->services['foo2'] = new \FooCircular($a);
    }

    /**
     * Gets the public 'foo5' shared service.
     *
     * @return \stdClass
     */
    protected function getFoo5Service()
    {
        $this->services['foo5'] = $instance = new \stdClass();

        $a = new \stdClass($instance);
        $a->foo = $instance;

        $instance->bar = $a;

        return $instance;
    }

    /**
     * Gets the public 'foo6' shared service.
     *
     * @return \stdClass
     */
    protected function getFoo6Service()
    {
        $this->services['foo6'] = $instance = new \stdClass();

        $instance->bar6 = ($this->privates['bar6'] ?? $this->getBar6Service());

        return $instance;
    }

    /**
     * Gets the public 'foobar4' shared service.
     *
     * @return \stdClass
     */
    protected function getFoobar4Service()
    {
        $a = new \stdClass();

        $this->services['foobar4'] = $instance = new \stdClass($a);

        $a->foobar = $instance;

        return $instance;
    }

    /**
     * Gets the public 'logger' shared service.
     *
     * @return \stdClass
     */
    protected function getLoggerService()
    {
        $a = ($this->services['connection'] ?? $this->getConnectionService());

        if (isset($this->services['logger'])) {
            return $this->services['logger'];
        }

        $this->services['logger'] = $instance = new \stdClass($a);

        $instance->handler = new \stdClass(($this->services['manager'] ?? $this->getManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'manager' shared service.
     *
     * @return \stdClass
     */
    protected function getManagerService()
    {
        $a = ($this->services['connection'] ?? $this->getConnectionService());

        if (isset($this->services['manager'])) {
            return $this->services['manager'];
        }

        return $this->services['manager'] = new \stdClass($a);
    }

    /**
     * Gets the public 'manager2' shared service.
     *
     * @return \stdClass
     */
    protected function getManager2Service()
    {
        $a = ($this->services['connection2'] ?? $this->getConnection2Service());

        if (isset($this->services['manager2'])) {
            return $this->services['manager2'];
        }

        return $this->services['manager2'] = new \stdClass($a);
    }

    /**
     * Gets the public 'root' shared service.
     *
     * @return \stdClass
     */
    protected function getRootService()
    {
        $a = new \Symfony\Component\DependencyInjection\Tests\Fixtures\FooForCircularWithAddCalls();

        $b = new \stdClass();

        $a->call(new \stdClass(new \stdClass($b, ($this->privates['level5'] ?? $this->getLevel5Service()))));

        return $this->services['root'] = new \stdClass($a, $b);
    }

    /**
     * Gets the public 'subscriber' shared service.
     *
     * @return \stdClass
     */
    protected function getSubscriberService()
    {
        $a = ($this->services['manager'] ?? $this->getManagerService());

        if (isset($this->services['subscriber'])) {
            return $this->services['subscriber'];
        }

        return $this->services['subscriber'] = new \stdClass($a);
    }

    /**
     * Gets the private 'bar6' shared service.
     *
     * @return \stdClass
     */
    protected function getBar6Service()
    {
        $a = ($this->services['foo6'] ?? $this->getFoo6Service());

        if (isset($this->privates['bar6'])) {
            return $this->privates['bar6'];
        }

        return $this->privates['bar6'] = new \stdClass($a);
    }

    /**
     * Gets the private 'level5' shared service.
     *
     * @return \stdClass
     */
    protected function getLevel5Service()
    {
        $a = new \Symfony\Component\DependencyInjection\Tests\Fixtures\FooForCircularWithAddCalls();

        $this->privates['level5'] = $instance = new \stdClass($a);

        $a->call($instance);

        return $instance;
    }
}
=======
<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class Symfony_DI_PhpDumper_Test_Almost_Circular_Private extends Container
{
    private $parameters;
    private $targetDirs = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'bar2' => 'getBar2Service',
            'bar3' => 'getBar3Service',
            'baz6' => 'getBaz6Service',
            'connection' => 'getConnectionService',
            'connection2' => 'getConnection2Service',
            'foo' => 'getFooService',
            'foo2' => 'getFoo2Service',
            'foo5' => 'getFoo5Service',
            'foo6' => 'getFoo6Service',
            'foobar4' => 'getFoobar4Service',
            'logger' => 'getLoggerService',
            'manager' => 'getManagerService',
            'manager2' => 'getManager2Service',
            'root' => 'getRootService',
            'subscriber' => 'getSubscriberService',
        ];

        $this->aliases = [];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'bar' => true,
            'bar5' => true,
            'bar6' => true,
            'config' => true,
            'config2' => true,
            'dispatcher' => true,
            'dispatcher2' => true,
            'foo4' => true,
            'foobar' => true,
            'foobar2' => true,
            'foobar3' => true,
            'level2' => true,
            'level3' => true,
            'level4' => true,
            'level5' => true,
            'level6' => true,
            'logger2' => true,
            'multiuse1' => true,
            'subscriber2' => true,
        ];
    }

    /**
     * Gets the public 'bar2' shared service.
     *
     * @return \BarCircular
     */
    protected function getBar2Service()
    {
        $this->services['bar2'] = $instance = new \BarCircular();

        $instance->addFoobar(new \FoobarCircular(($this->services['foo2'] ?? $this->getFoo2Service())));

        return $instance;
    }

    /**
     * Gets the public 'bar3' shared service.
     *
     * @return \BarCircular
     */
    protected function getBar3Service()
    {
        $this->services['bar3'] = $instance = new \BarCircular();

        $a = new \FoobarCircular();

        $instance->addFoobar($a, $a);

        return $instance;
    }

    /**
     * Gets the public 'baz6' shared service.
     *
     * @return \stdClass
     */
    protected function getBaz6Service()
    {
        $this->services['baz6'] = $instance = new \stdClass();

        $instance->bar6 = ($this->privates['bar6'] ?? $this->getBar6Service());

        return $instance;
    }

    /**
     * Gets the public 'connection' shared service.
     *
     * @return \stdClass
     */
    protected function getConnectionService()
    {
        $a = new \stdClass();

        $b = new \stdClass();

        $this->services['connection'] = $instance = new \stdClass($a, $b);

        $b->logger = ($this->services['logger'] ?? $this->getLoggerService());

        $a->subscriber = ($this->services['subscriber'] ?? $this->getSubscriberService());

        return $instance;
    }

    /**
     * Gets the public 'connection2' shared service.
     *
     * @return \stdClass
     */
    protected function getConnection2Service()
    {
        $a = new \stdClass();

        $b = new \stdClass();

        $this->services['connection2'] = $instance = new \stdClass($a, $b);

        $c = new \stdClass($instance);

        $d = ($this->services['manager2'] ?? $this->getManager2Service());

        $c->handler2 = new \stdClass($d);

        $b->logger2 = $c;

        $a->subscriber2 = new \stdClass($d);

        return $instance;
    }

    /**
     * Gets the public 'foo' shared service.
     *
     * @return \FooCircular
     */
    protected function getFooService()
    {
        $a = new \BarCircular();

        $this->services['foo'] = $instance = new \FooCircular($a);

        $a->addFoobar(new \FoobarCircular($instance));

        return $instance;
    }

    /**
     * Gets the public 'foo2' shared service.
     *
     * @return \FooCircular
     */
    protected function getFoo2Service()
    {
        $a = ($this->services['bar2'] ?? $this->getBar2Service());

        if (isset($this->services['foo2'])) {
            return $this->services['foo2'];
        }

        return $this->services['foo2'] = new \FooCircular($a);
    }

    /**
     * Gets the public 'foo5' shared service.
     *
     * @return \stdClass
     */
    protected function getFoo5Service()
    {
        $this->services['foo5'] = $instance = new \stdClass();

        $a = new \stdClass($instance);
        $a->foo = $instance;

        $instance->bar = $a;

        return $instance;
    }

    /**
     * Gets the public 'foo6' shared service.
     *
     * @return \stdClass
     */
    protected function getFoo6Service()
    {
        $this->services['foo6'] = $instance = new \stdClass();

        $instance->bar6 = ($this->privates['bar6'] ?? $this->getBar6Service());

        return $instance;
    }

    /**
     * Gets the public 'foobar4' shared service.
     *
     * @return \stdClass
     */
    protected function getFoobar4Service()
    {
        $a = new \stdClass();

        $this->services['foobar4'] = $instance = new \stdClass($a);

        $a->foobar = $instance;

        return $instance;
    }

    /**
     * Gets the public 'logger' shared service.
     *
     * @return \stdClass
     */
    protected function getLoggerService()
    {
        $a = ($this->services['connection'] ?? $this->getConnectionService());

        if (isset($this->services['logger'])) {
            return $this->services['logger'];
        }

        $this->services['logger'] = $instance = new \stdClass($a);

        $instance->handler = new \stdClass(($this->services['manager'] ?? $this->getManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'manager' shared service.
     *
     * @return \stdClass
     */
    protected function getManagerService()
    {
        $a = ($this->services['connection'] ?? $this->getConnectionService());

        if (isset($this->services['manager'])) {
            return $this->services['manager'];
        }

        return $this->services['manager'] = new \stdClass($a);
    }

    /**
     * Gets the public 'manager2' shared service.
     *
     * @return \stdClass
     */
    protected function getManager2Service()
    {
        $a = ($this->services['connection2'] ?? $this->getConnection2Service());

        if (isset($this->services['manager2'])) {
            return $this->services['manager2'];
        }

        return $this->services['manager2'] = new \stdClass($a);
    }

    /**
     * Gets the public 'root' shared service.
     *
     * @return \stdClass
     */
    protected function getRootService()
    {
        $a = new \Symfony\Component\DependencyInjection\Tests\Fixtures\FooForCircularWithAddCalls();

        $b = new \stdClass();

        $a->call(new \stdClass(new \stdClass($b, ($this->privates['level5'] ?? $this->getLevel5Service()))));

        return $this->services['root'] = new \stdClass($a, $b);
    }

    /**
     * Gets the public 'subscriber' shared service.
     *
     * @return \stdClass
     */
    protected function getSubscriberService()
    {
        $a = ($this->services['manager'] ?? $this->getManagerService());

        if (isset($this->services['subscriber'])) {
            return $this->services['subscriber'];
        }

        return $this->services['subscriber'] = new \stdClass($a);
    }

    /**
     * Gets the private 'bar6' shared service.
     *
     * @return \stdClass
     */
    protected function getBar6Service()
    {
        $a = ($this->services['foo6'] ?? $this->getFoo6Service());

        if (isset($this->privates['bar6'])) {
            return $this->privates['bar6'];
        }

        return $this->privates['bar6'] = new \stdClass($a);
    }

    /**
     * Gets the private 'level5' shared service.
     *
     * @return \stdClass
     */
    protected function getLevel5Service()
    {
        $a = new \Symfony\Component\DependencyInjection\Tests\Fixtures\FooForCircularWithAddCalls();

        $this->privates['level5'] = $instance = new \stdClass($a);

        $a->call($instance);

        return $instance;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
