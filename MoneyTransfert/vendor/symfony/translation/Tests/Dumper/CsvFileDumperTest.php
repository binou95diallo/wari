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

namespace Symfony\Component\Translation\Tests\Dumper;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Translation\Dumper\CsvFileDumper;
use Symfony\Component\Translation\MessageCatalogue;

class CsvFileDumperTest extends TestCase
{
    public function testFormatCatalogue()
    {
        $catalogue = new MessageCatalogue('en');
        $catalogue->add(['foo' => 'bar', 'bar' => 'foo
foo', 'foo;foo' => 'bar']);

        $dumper = new CsvFileDumper();

        $this->assertStringEqualsFile(__DIR__.'/../fixtures/valid.csv', $dumper->formatCatalogue($catalogue, 'messages'));
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

namespace Symfony\Component\Translation\Tests\Dumper;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Translation\Dumper\CsvFileDumper;
use Symfony\Component\Translation\MessageCatalogue;

class CsvFileDumperTest extends TestCase
{
    public function testFormatCatalogue()
    {
        $catalogue = new MessageCatalogue('en');
        $catalogue->add(['foo' => 'bar', 'bar' => 'foo
foo', 'foo;foo' => 'bar']);

        $dumper = new CsvFileDumper();

        $this->assertStringEqualsFile(__DIR__.'/../fixtures/valid.csv', $dumper->formatCatalogue($catalogue, 'messages'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
