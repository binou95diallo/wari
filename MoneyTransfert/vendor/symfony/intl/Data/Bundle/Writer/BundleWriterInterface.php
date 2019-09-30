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

namespace Symfony\Component\Intl\Data\Bundle\Writer;

/**
 * Writes resource bundle files.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
interface BundleWriterInterface
{
    /**
     * Writes data to a resource bundle.
     *
     * @param string $path   The path to the resource bundle
     * @param string $locale The locale to (over-)write
     * @param mixed  $data   The data to write
     */
    public function write($path, $locale, $data);
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

namespace Symfony\Component\Intl\Data\Bundle\Writer;

/**
 * Writes resource bundle files.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
interface BundleWriterInterface
{
    /**
     * Writes data to a resource bundle.
     *
     * @param string $path   The path to the resource bundle
     * @param string $locale The locale to (over-)write
     * @param mixed  $data   The data to write
     */
    public function write($path, $locale, $data);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
