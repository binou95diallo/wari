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
use Symfony\Component\Config\Definition\BooleanNode;

class BooleanNodeTest extends TestCase
{
    /**
     * @dataProvider getValidValues
     */
    public function testNormalize($value)
    {
        $node = new BooleanNode('test');
        $this->assertSame($value, $node->normalize($value));
    }

    /**
     * @dataProvider getValidValues
     *
     * @param bool $value
     */
    public function testValidNonEmptyValues($value)
    {
        $node = new BooleanNode('test');
        $node->setAllowEmptyValue(false);

        $this->assertSame($value, $node->finalize($value));
    }

    public function getValidValues()
    {
        return [
            [false],
            [true],
        ];
    }

    /**
     * @dataProvider getInvalidValues
     * @expectedException \Symfony\Component\Config\Definition\Exception\InvalidTypeException
     */
    public function testNormalizeThrowsExceptionOnInvalidValues($value)
    {
        $node = new BooleanNode('test');
        $node->normalize($value);
    }

    public function getInvalidValues()
    {
        return [
            [null],
            [''],
            ['foo'],
            [0],
            [1],
            [0.0],
            [0.1],
            [[]],
            [['foo' => 'bar']],
            [new \stdClass()],
        ];
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
use Symfony\Component\Config\Definition\BooleanNode;

class BooleanNodeTest extends TestCase
{
    /**
     * @dataProvider getValidValues
     */
    public function testNormalize($value)
    {
        $node = new BooleanNode('test');
        $this->assertSame($value, $node->normalize($value));
    }

    /**
     * @dataProvider getValidValues
     *
     * @param bool $value
     */
    public function testValidNonEmptyValues($value)
    {
        $node = new BooleanNode('test');
        $node->setAllowEmptyValue(false);

        $this->assertSame($value, $node->finalize($value));
    }

    public function getValidValues()
    {
        return [
            [false],
            [true],
        ];
    }

    /**
     * @dataProvider getInvalidValues
     * @expectedException \Symfony\Component\Config\Definition\Exception\InvalidTypeException
     */
    public function testNormalizeThrowsExceptionOnInvalidValues($value)
    {
        $node = new BooleanNode('test');
        $node->normalize($value);
    }

    public function getInvalidValues()
    {
        return [
            [null],
            [''],
            ['foo'],
            [0],
            [1],
            [0.0],
            [0.1],
            [[]],
            [['foo' => 'bar']],
            [new \stdClass()],
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
