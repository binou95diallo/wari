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

namespace Symfony\Component\Intl\Tests\Data\Bundle\Writer;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Intl\Data\Bundle\Writer\PhpBundleWriter;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PhpBundleWriterTest extends TestCase
{
    /**
     * @var PhpBundleWriter
     */
    private $writer;

    private $directory;

    /**
     * @var Filesystem
     */
    private $filesystem;

    protected function setUp()
    {
        $this->writer = new PhpBundleWriter();
        $this->directory = sys_get_temp_dir().'/PhpBundleWriterTest/'.mt_rand(1000, 9999);
        $this->filesystem = new Filesystem();

        $this->filesystem->mkdir($this->directory);
    }

    protected function tearDown()
    {
        $this->filesystem->remove($this->directory);
    }

    public function testWrite()
    {
        $this->writer->write($this->directory, 'en', [
            'Entry1' => [
                'Array' => ['foo', 'bar'],
                'Integer' => 5,
                'Boolean' => false,
                'Float' => 1.23,
            ],
            'Entry2' => 'String',
            'Traversable' => new \ArrayIterator([
                'Foo' => 'Bar',
            ]),
        ]);

        $this->assertFileEquals(__DIR__.'/Fixtures/en.php', $this->directory.'/en.php');
    }

    /**
     * @requires extension intl
     */
    public function testWriteResourceBundle()
    {
        $bundle = new \ResourceBundle('rb', __DIR__.'/Fixtures', false);

        $this->writer->write($this->directory, 'en', $bundle);

        $this->assertFileEquals(__DIR__.'/Fixtures/rb.php', $this->directory.'/en.php');
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

namespace Symfony\Component\Intl\Tests\Data\Bundle\Writer;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Intl\Data\Bundle\Writer\PhpBundleWriter;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PhpBundleWriterTest extends TestCase
{
    /**
     * @var PhpBundleWriter
     */
    private $writer;

    private $directory;

    /**
     * @var Filesystem
     */
    private $filesystem;

    protected function setUp()
    {
        $this->writer = new PhpBundleWriter();
        $this->directory = sys_get_temp_dir().'/PhpBundleWriterTest/'.mt_rand(1000, 9999);
        $this->filesystem = new Filesystem();

        $this->filesystem->mkdir($this->directory);
    }

    protected function tearDown()
    {
        $this->filesystem->remove($this->directory);
    }

    public function testWrite()
    {
        $this->writer->write($this->directory, 'en', [
            'Entry1' => [
                'Array' => ['foo', 'bar'],
                'Integer' => 5,
                'Boolean' => false,
                'Float' => 1.23,
            ],
            'Entry2' => 'String',
            'Traversable' => new \ArrayIterator([
                'Foo' => 'Bar',
            ]),
        ]);

        $this->assertFileEquals(__DIR__.'/Fixtures/en.php', $this->directory.'/en.php');
    }

    /**
     * @requires extension intl
     */
    public function testWriteResourceBundle()
    {
        $bundle = new \ResourceBundle('rb', __DIR__.'/Fixtures', false);

        $this->writer->write($this->directory, 'en', $bundle);

        $this->assertFileEquals(__DIR__.'/Fixtures/rb.php', $this->directory.'/en.php');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
