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

namespace Symfony\Component\Console\Tests\Helper;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Helper\Dumper;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\VarDumper\Test\VarDumperTestTrait;

class DumperTest extends TestCase
{
    use VarDumperTestTrait;

    public static function setUpBeforeClass()
    {
        putenv('DUMP_LIGHT_ARRAY=1');
        putenv('DUMP_COMMA_SEPARATOR=1');
    }

    public static function tearDownAfterClass()
    {
        putenv('DUMP_LIGHT_ARRAY');
        putenv('DUMP_COMMA_SEPARATOR');
    }

    /**
     * @dataProvider provideVariables
     */
    public function testInvoke($variable)
    {
        $dumper = new Dumper($this->getMockBuilder(OutputInterface::class)->getMock());

        $this->assertDumpMatchesFormat($dumper($variable), $variable);
    }

    public function provideVariables()
    {
        return [
            [null],
            [true],
            [false],
            [1],
            [-1.5],
            ['string'],
            [[1, '2']],
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

namespace Symfony\Component\Console\Tests\Helper;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Helper\Dumper;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\VarDumper\Test\VarDumperTestTrait;

class DumperTest extends TestCase
{
    use VarDumperTestTrait;

    public static function setUpBeforeClass()
    {
        putenv('DUMP_LIGHT_ARRAY=1');
        putenv('DUMP_COMMA_SEPARATOR=1');
    }

    public static function tearDownAfterClass()
    {
        putenv('DUMP_LIGHT_ARRAY');
        putenv('DUMP_COMMA_SEPARATOR');
    }

    /**
     * @dataProvider provideVariables
     */
    public function testInvoke($variable)
    {
        $dumper = new Dumper($this->getMockBuilder(OutputInterface::class)->getMock());

        $this->assertDumpMatchesFormat($dumper($variable), $variable);
    }

    public function provideVariables()
    {
        return [
            [null],
            [true],
            [false],
            [1],
            [-1.5],
            ['string'],
            [[1, '2']],
            [new \stdClass()],
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
