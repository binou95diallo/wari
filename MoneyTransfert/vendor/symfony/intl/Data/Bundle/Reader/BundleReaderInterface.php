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

/**
 * Reads resource bundle files.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
interface BundleReaderInterface
{
    /**
     * Reads a resource bundle.
     *
     * @param string $path   The path to the resource bundle
     * @param string $locale The locale to read
     *
     * @return mixed returns an array or {@link \ArrayAccess} instance for
     *               complex data, a scalar value otherwise
     */
    public function read($path, $locale);
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

/**
 * Reads resource bundle files.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
interface BundleReaderInterface
{
    /**
     * Reads a resource bundle.
     *
     * @param string $path   The path to the resource bundle
     * @param string $locale The locale to read
     *
     * @return mixed returns an array or {@link \ArrayAccess} instance for
     *               complex data, a scalar value otherwise
     */
    public function read($path, $locale);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
