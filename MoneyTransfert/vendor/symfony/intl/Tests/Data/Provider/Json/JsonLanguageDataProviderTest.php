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

namespace Symfony\Component\Intl\Tests\Data\Provider\Json;

use Symfony\Component\Intl\Data\Bundle\Reader\BundleReaderInterface;
use Symfony\Component\Intl\Data\Bundle\Reader\JsonBundleReader;
use Symfony\Component\Intl\Intl;
use Symfony\Component\Intl\Tests\Data\Provider\AbstractLanguageDataProviderTest;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @group intl-data
 * @group legacy
 */
class JsonLanguageDataProviderTest extends AbstractLanguageDataProviderTest
{
    protected function getDataDirectory()
    {
        return Intl::getDataDirectory();
    }

    /**
     * @return BundleReaderInterface
     */
    protected function createBundleReader()
    {
        return new JsonBundleReader();
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

namespace Symfony\Component\Intl\Tests\Data\Provider\Json;

use Symfony\Component\Intl\Data\Bundle\Reader\BundleReaderInterface;
use Symfony\Component\Intl\Data\Bundle\Reader\JsonBundleReader;
use Symfony\Component\Intl\Intl;
use Symfony\Component\Intl\Tests\Data\Provider\AbstractLanguageDataProviderTest;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @group intl-data
 * @group legacy
 */
class JsonLanguageDataProviderTest extends AbstractLanguageDataProviderTest
{
    protected function getDataDirectory()
    {
        return Intl::getDataDirectory();
    }

    /**
     * @return BundleReaderInterface
     */
    protected function createBundleReader()
    {
        return new JsonBundleReader();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
