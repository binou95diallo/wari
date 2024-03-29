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

namespace Symfony\Bundle\FrameworkBundle\Templating\Helper;

@trigger_error('The '.AssetsHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\Component\Asset\Packages;
use Symfony\Component\Templating\Helper\Helper;

/**
 * AssetsHelper helps manage asset URLs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class AssetsHelper extends Helper
{
    private $packages;

    public function __construct(Packages $packages)
    {
        $this->packages = $packages;
    }

    /**
     * Returns the public url/path of an asset.
     *
     * If the package used to generate the path is an instance of
     * UrlPackage, you will always get a URL and not a path.
     *
     * @param string $path        A public path
     * @param string $packageName The name of the asset package to use
     *
     * @return string The public path of the asset
     */
    public function getUrl($path, $packageName = null)
    {
        return $this->packages->getUrl($path, $packageName);
    }

    /**
     * Returns the version of an asset.
     *
     * @param string $path        A public path
     * @param string $packageName The name of the asset package to use
     *
     * @return string The asset version
     */
    public function getVersion($path, $packageName = null)
    {
        return $this->packages->getVersion($path, $packageName);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'assets';
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

namespace Symfony\Bundle\FrameworkBundle\Templating\Helper;

@trigger_error('The '.AssetsHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\Component\Asset\Packages;
use Symfony\Component\Templating\Helper\Helper;

/**
 * AssetsHelper helps manage asset URLs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class AssetsHelper extends Helper
{
    private $packages;

    public function __construct(Packages $packages)
    {
        $this->packages = $packages;
    }

    /**
     * Returns the public url/path of an asset.
     *
     * If the package used to generate the path is an instance of
     * UrlPackage, you will always get a URL and not a path.
     *
     * @param string $path        A public path
     * @param string $packageName The name of the asset package to use
     *
     * @return string The public path of the asset
     */
    public function getUrl($path, $packageName = null)
    {
        return $this->packages->getUrl($path, $packageName);
    }

    /**
     * Returns the version of an asset.
     *
     * @param string $path        A public path
     * @param string $packageName The name of the asset package to use
     *
     * @return string The asset version
     */
    public function getVersion($path, $packageName = null)
    {
        return $this->packages->getVersion($path, $packageName);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'assets';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
