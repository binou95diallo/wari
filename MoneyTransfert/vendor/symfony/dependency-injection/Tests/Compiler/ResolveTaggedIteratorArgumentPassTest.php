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
use Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument;
use Symfony\Component\DependencyInjection\Compiler\ResolveTaggedIteratorArgumentPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class ResolveTaggedIteratorArgumentPassTest extends TestCase
{
    public function testProcess()
    {
        $container = new ContainerBuilder();
        $container->register('a', 'stdClass')->addTag('foo');
        $container->register('b', 'stdClass')->addTag('foo', ['priority' => 20]);
        $container->register('c', 'stdClass')->addTag('foo', ['priority' => 10]);
        $container->register('d', 'stdClass')->setProperty('foos', new TaggedIteratorArgument('foo'));

        (new ResolveTaggedIteratorArgumentPass())->process($container);

        $properties = $container->getDefinition('d')->getProperties();
        $expected = new TaggedIteratorArgument('foo');
        $expected->setValues([new Reference('b'), new Reference('c'), new Reference('a')]);
        $this->assertEquals($expected, $properties['foos']);
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
use Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument;
use Symfony\Component\DependencyInjection\Compiler\ResolveTaggedIteratorArgumentPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class ResolveTaggedIteratorArgumentPassTest extends TestCase
{
    public function testProcess()
    {
        $container = new ContainerBuilder();
        $container->register('a', 'stdClass')->addTag('foo');
        $container->register('b', 'stdClass')->addTag('foo', ['priority' => 20]);
        $container->register('c', 'stdClass')->addTag('foo', ['priority' => 10]);
        $container->register('d', 'stdClass')->setProperty('foos', new TaggedIteratorArgument('foo'));

        (new ResolveTaggedIteratorArgumentPass())->process($container);

        $properties = $container->getDefinition('d')->getProperties();
        $expected = new TaggedIteratorArgument('foo');
        $expected->setValues([new Reference('b'), new Reference('c'), new Reference('a')]);
        $this->assertEquals($expected, $properties['foos']);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
