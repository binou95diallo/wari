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

namespace Symfony\Component\HttpKernel\Config;

use Symfony\Component\Config\FileLocator as BaseFileLocator;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * FileLocator uses the KernelInterface to locate resources in bundles.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLocator extends BaseFileLocator
{
    private $kernel;
    private $path;

    /**
     * @param KernelInterface $kernel A KernelInterface instance
     * @param string|null     $path   The path the global resource directory
     * @param array           $paths  An array of paths where to look for resources
     */
    public function __construct(KernelInterface $kernel, string $path = null, array $paths = [])
    {
        $this->kernel = $kernel;
        if (null !== $path) {
            $this->path = $path;
            $paths[] = $path;
        }

        parent::__construct($paths);
    }

    /**
     * {@inheritdoc}
     */
    public function locate($file, $currentPath = null, $first = true)
    {
        if (isset($file[0]) && '@' === $file[0]) {
            return $this->kernel->locateResource($file, $this->path, $first);
        }

        return parent::locate($file, $currentPath, $first);
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

namespace Symfony\Component\HttpKernel\Config;

use Symfony\Component\Config\FileLocator as BaseFileLocator;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * FileLocator uses the KernelInterface to locate resources in bundles.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLocator extends BaseFileLocator
{
    private $kernel;
    private $path;

    /**
     * @param KernelInterface $kernel A KernelInterface instance
     * @param string|null     $path   The path the global resource directory
     * @param array           $paths  An array of paths where to look for resources
     */
    public function __construct(KernelInterface $kernel, string $path = null, array $paths = [])
    {
        $this->kernel = $kernel;
        if (null !== $path) {
            $this->path = $path;
            $paths[] = $path;
        }

        parent::__construct($paths);
    }

    /**
     * {@inheritdoc}
     */
    public function locate($file, $currentPath = null, $first = true)
    {
        if (isset($file[0]) && '@' === $file[0]) {
            return $this->kernel->locateResource($file, $this->path, $first);
        }

        return parent::locate($file, $currentPath, $first);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
