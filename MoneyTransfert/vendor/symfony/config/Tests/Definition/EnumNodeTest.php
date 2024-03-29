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

namespace Symfony\Component\Config\Tests\Definition;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Definition\EnumNode;

class EnumNodeTest extends TestCase
{
    public function testFinalizeValue()
    {
        $node = new EnumNode('foo', null, ['foo', 'bar']);
        $this->assertSame('foo', $node->finalize('foo'));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage $values must contain at least one element.
     */
    public function testConstructionWithNoValues()
    {
        new EnumNode('foo', null, []);
    }

    public function testConstructionWithOneValue()
    {
        $node = new EnumNode('foo', null, ['foo']);
        $this->assertSame('foo', $node->finalize('foo'));
    }

    public function testConstructionWithOneDistinctValue()
    {
        $node = new EnumNode('foo', null, ['foo', 'foo']);
        $this->assertSame('foo', $node->finalize('foo'));
    }

    public function testConstructionWithNullName()
    {
        $node = new EnumNode(null, null, ['foo']);
        $this->assertSame('foo', $node->finalize('foo'));
    }

    /**
     * @expectedException \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException
     * @expectedExceptionMessage The value "foobar" is not allowed for path "foo". Permissible values: "foo", "bar"
     */
    public function testFinalizeWithInvalidValue()
    {
        $node = new EnumNode('foo', null, ['foo', 'bar']);
        $node->finalize('foobar');
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

namespace Symfony\Component\Config\Tests\Definition;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Definition\EnumNode;

class EnumNodeTest extends TestCase
{
    public function testFinalizeValue()
    {
        $node = new EnumNode('foo', null, ['foo', 'bar']);
        $this->assertSame('foo', $node->finalize('foo'));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage $values must contain at least one element.
     */
    public function testConstructionWithNoValues()
    {
        new EnumNode('foo', null, []);
    }

    public function testConstructionWithOneValue()
    {
        $node = new EnumNode('foo', null, ['foo']);
        $this->assertSame('foo', $node->finalize('foo'));
    }

    public function testConstructionWithOneDistinctValue()
    {
        $node = new EnumNode('foo', null, ['foo', 'foo']);
        $this->assertSame('foo', $node->finalize('foo'));
    }

    public function testConstructionWithNullName()
    {
        $node = new EnumNode(null, null, ['foo']);
        $this->assertSame('foo', $node->finalize('foo'));
    }

    /**
     * @expectedException \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException
     * @expectedExceptionMessage The value "foobar" is not allowed for path "foo". Permissible values: "foo", "bar"
     */
    public function testFinalizeWithInvalidValue()
    {
        $node = new EnumNode('foo', null, ['foo', 'bar']);
        $node->finalize('foobar');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
