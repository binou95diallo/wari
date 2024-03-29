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

namespace Symfony\Component\Intl\Data\Bundle\Reader;

use Symfony\Component\Intl\Exception\ResourceBundleNotFoundException;
use Symfony\Component\Intl\Exception\RuntimeException;

/**
 * Reads .php resource bundles.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class PhpBundleReader implements BundleReaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function read($path, $locale)
    {
        $fileName = $path.'/'.$locale.'.php';

        // prevent directory traversal attacks
        if (\dirname($fileName) !== $path) {
            throw new ResourceBundleNotFoundException(sprintf('The resource bundle "%s" does not exist.', $fileName));
        }

        if (!file_exists($fileName)) {
            throw new ResourceBundleNotFoundException(sprintf('The resource bundle "%s/%s.php" does not exist.', $path, $locale));
        }

        if (!is_file($fileName)) {
            throw new RuntimeException(sprintf('The resource bundle "%s/%s.php" is not a file.', $path, $locale));
        }

        return include $fileName;
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

namespace Symfony\Component\Intl\Data\Bundle\Reader;

use Symfony\Component\Intl\Exception\ResourceBundleNotFoundException;
use Symfony\Component\Intl\Exception\RuntimeException;

/**
 * Reads .php resource bundles.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class PhpBundleReader implements BundleReaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function read($path, $locale)
    {
        $fileName = $path.'/'.$locale.'.php';

        // prevent directory traversal attacks
        if (\dirname($fileName) !== $path) {
            throw new ResourceBundleNotFoundException(sprintf('The resource bundle "%s" does not exist.', $fileName));
        }

        if (!file_exists($fileName)) {
            throw new ResourceBundleNotFoundException(sprintf('The resource bundle "%s/%s.php" does not exist.', $path, $locale));
        }

        if (!is_file($fileName)) {
            throw new RuntimeException(sprintf('The resource bundle "%s/%s.php" is not a file.', $path, $locale));
        }

        return include $fileName;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
