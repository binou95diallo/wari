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

namespace Symfony\Component\Translation\Tests\Loader;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Resource\FileResource;
use Symfony\Component\Translation\Loader\YamlFileLoader;

class YamlFileLoaderTest extends TestCase
{
    public function testLoad()
    {
        $loader = new YamlFileLoader();
        $resource = __DIR__.'/../fixtures/resources.yml';
        $catalogue = $loader->load($resource, 'en', 'domain1');

        $this->assertEquals(['foo' => 'bar'], $catalogue->all('domain1'));
        $this->assertEquals('en', $catalogue->getLocale());
        $this->assertEquals([new FileResource($resource)], $catalogue->getResources());
    }

    public function testLoadDoesNothingIfEmpty()
    {
        $loader = new YamlFileLoader();
        $resource = __DIR__.'/../fixtures/empty.yml';
        $catalogue = $loader->load($resource, 'en', 'domain1');

        $this->assertEquals([], $catalogue->all('domain1'));
        $this->assertEquals('en', $catalogue->getLocale());
        $this->assertEquals([new FileResource($resource)], $catalogue->getResources());
    }

    /**
     * @expectedException \Symfony\Component\Translation\Exception\NotFoundResourceException
     */
    public function testLoadNonExistingResource()
    {
        $loader = new YamlFileLoader();
        $resource = __DIR__.'/../fixtures/non-existing.yml';
        $loader->load($resource, 'en', 'domain1');
    }

    /**
     * @expectedException \Symfony\Component\Translation\Exception\InvalidResourceException
     */
    public function testLoadThrowsAnExceptionIfFileNotLocal()
    {
        $loader = new YamlFileLoader();
        $resource = 'http://example.com/resources.yml';
        $loader->load($resource, 'en', 'domain1');
    }

    /**
     * @expectedException \Symfony\Component\Translation\Exception\InvalidResourceException
     */
    public function testLoadThrowsAnExceptionIfNotAnArray()
    {
        $loader = new YamlFileLoader();
        $resource = __DIR__.'/../fixtures/non-valid.yml';
        $loader->load($resource, 'en', 'domain1');
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

namespace Symfony\Component\Translation\Tests\Loader;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Resource\FileResource;
use Symfony\Component\Translation\Loader\YamlFileLoader;

class YamlFileLoaderTest extends TestCase
{
    public function testLoad()
    {
        $loader = new YamlFileLoader();
        $resource = __DIR__.'/../fixtures/resources.yml';
        $catalogue = $loader->load($resource, 'en', 'domain1');

        $this->assertEquals(['foo' => 'bar'], $catalogue->all('domain1'));
        $this->assertEquals('en', $catalogue->getLocale());
        $this->assertEquals([new FileResource($resource)], $catalogue->getResources());
    }

    public function testLoadDoesNothingIfEmpty()
    {
        $loader = new YamlFileLoader();
        $resource = __DIR__.'/../fixtures/empty.yml';
        $catalogue = $loader->load($resource, 'en', 'domain1');

        $this->assertEquals([], $catalogue->all('domain1'));
        $this->assertEquals('en', $catalogue->getLocale());
        $this->assertEquals([new FileResource($resource)], $catalogue->getResources());
    }

    /**
     * @expectedException \Symfony\Component\Translation\Exception\NotFoundResourceException
     */
    public function testLoadNonExistingResource()
    {
        $loader = new YamlFileLoader();
        $resource = __DIR__.'/../fixtures/non-existing.yml';
        $loader->load($resource, 'en', 'domain1');
    }

    /**
     * @expectedException \Symfony\Component\Translation\Exception\InvalidResourceException
     */
    public function testLoadThrowsAnExceptionIfFileNotLocal()
    {
        $loader = new YamlFileLoader();
        $resource = 'http://example.com/resources.yml';
        $loader->load($resource, 'en', 'domain1');
    }

    /**
     * @expectedException \Symfony\Component\Translation\Exception\InvalidResourceException
     */
    public function testLoadThrowsAnExceptionIfNotAnArray()
    {
        $loader = new YamlFileLoader();
        $resource = __DIR__.'/../fixtures/non-valid.yml';
        $loader->load($resource, 'en', 'domain1');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
