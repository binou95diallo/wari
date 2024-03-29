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

namespace Symfony\Component\Asset\Tests\VersionStrategy;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy;

class JsonManifestVersionStrategyTest extends TestCase
{
    public function testGetVersion()
    {
        $strategy = $this->createStrategy('manifest-valid.json');

        $this->assertEquals('main.123abc.js', $strategy->getVersion('main.js'));
    }

    public function testApplyVersion()
    {
        $strategy = $this->createStrategy('manifest-valid.json');

        $this->assertEquals('css/styles.555def.css', $strategy->getVersion('css/styles.css'));
    }

    public function testApplyVersionWhenKeyDoesNotExistInManifest()
    {
        $strategy = $this->createStrategy('manifest-valid.json');

        $this->assertEquals('css/other.css', $strategy->getVersion('css/other.css'));
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testMissingManifestFileThrowsException()
    {
        $strategy = $this->createStrategy('non-existent-file.json');
        $strategy->getVersion('main.js');
    }

    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Error parsing JSON
     */
    public function testManifestFileWithBadJSONThrowsException()
    {
        $strategy = $this->createStrategy('manifest-invalid.json');
        $strategy->getVersion('main.js');
    }

    private function createStrategy($manifestFilename)
    {
        return new JsonManifestVersionStrategy(__DIR__.'/../fixtures/'.$manifestFilename);
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

namespace Symfony\Component\Asset\Tests\VersionStrategy;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy;

class JsonManifestVersionStrategyTest extends TestCase
{
    public function testGetVersion()
    {
        $strategy = $this->createStrategy('manifest-valid.json');

        $this->assertEquals('main.123abc.js', $strategy->getVersion('main.js'));
    }

    public function testApplyVersion()
    {
        $strategy = $this->createStrategy('manifest-valid.json');

        $this->assertEquals('css/styles.555def.css', $strategy->getVersion('css/styles.css'));
    }

    public function testApplyVersionWhenKeyDoesNotExistInManifest()
    {
        $strategy = $this->createStrategy('manifest-valid.json');

        $this->assertEquals('css/other.css', $strategy->getVersion('css/other.css'));
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testMissingManifestFileThrowsException()
    {
        $strategy = $this->createStrategy('non-existent-file.json');
        $strategy->getVersion('main.js');
    }

    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Error parsing JSON
     */
    public function testManifestFileWithBadJSONThrowsException()
    {
        $strategy = $this->createStrategy('manifest-invalid.json');
        $strategy->getVersion('main.js');
    }

    private function createStrategy($manifestFilename)
    {
        return new JsonManifestVersionStrategy(__DIR__.'/../fixtures/'.$manifestFilename);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
