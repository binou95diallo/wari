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

namespace Symfony\Component\HttpKernel\Tests\DataCollector;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector;

class MemoryDataCollectorTest extends TestCase
{
    public function testCollect()
    {
        $collector = new MemoryDataCollector();
        $collector->collect(new Request(), new Response());

        $this->assertInternalType('integer', $collector->getMemory());
        $this->assertInternalType('integer', $collector->getMemoryLimit());
        $this->assertSame('memory', $collector->getName());
    }

    /** @dataProvider getBytesConversionTestData */
    public function testBytesConversion($limit, $bytes)
    {
        $collector = new MemoryDataCollector();
        $method = new \ReflectionMethod($collector, 'convertToBytes');
        $method->setAccessible(true);
        $this->assertEquals($bytes, $method->invoke($collector, $limit));
    }

    public function getBytesConversionTestData()
    {
        return [
            ['2k', 2048],
            ['2 k', 2048],
            ['8m', 8 * 1024 * 1024],
            ['+2 k', 2048],
            ['+2???k', 2048],
            ['0x10', 16],
            ['0xf', 15],
            ['010', 8],
            ['+0x10 k', 16 * 1024],
            ['1g', 1024 * 1024 * 1024],
            ['1G', 1024 * 1024 * 1024],
            ['-1', -1],
            ['0', 0],
            ['2mk', 2048], // the unit must be the last char, so in this case 'k', not 'm'
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

namespace Symfony\Component\HttpKernel\Tests\DataCollector;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector;

class MemoryDataCollectorTest extends TestCase
{
    public function testCollect()
    {
        $collector = new MemoryDataCollector();
        $collector->collect(new Request(), new Response());

        $this->assertInternalType('integer', $collector->getMemory());
        $this->assertInternalType('integer', $collector->getMemoryLimit());
        $this->assertSame('memory', $collector->getName());
    }

    /** @dataProvider getBytesConversionTestData */
    public function testBytesConversion($limit, $bytes)
    {
        $collector = new MemoryDataCollector();
        $method = new \ReflectionMethod($collector, 'convertToBytes');
        $method->setAccessible(true);
        $this->assertEquals($bytes, $method->invoke($collector, $limit));
    }

    public function getBytesConversionTestData()
    {
        return [
            ['2k', 2048],
            ['2 k', 2048],
            ['8m', 8 * 1024 * 1024],
            ['+2 k', 2048],
            ['+2???k', 2048],
            ['0x10', 16],
            ['0xf', 15],
            ['010', 8],
            ['+0x10 k', 16 * 1024],
            ['1g', 1024 * 1024 * 1024],
            ['1G', 1024 * 1024 * 1024],
            ['-1', -1],
            ['0', 0],
            ['2mk', 2048], // the unit must be the last char, so in this case 'k', not 'm'
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
