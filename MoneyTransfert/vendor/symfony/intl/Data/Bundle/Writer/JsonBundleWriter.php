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
 * Writes .json resource bundles.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class JsonBundleWriter implements BundleWriterInterface
{
    /**
     * {@inheritdoc}
     */
    public function write($path, $locale, $data)
    {
        if ($data instanceof \Traversable) {
            $data = iterator_to_array($data);
        }

        array_walk_recursive($data, function (&$value) {
            if ($value instanceof \Traversable) {
                $value = iterator_to_array($value);
            }
        });

        $contents = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)."\n";

        file_put_contents($path.'/'.$locale.'.json', $contents);
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

namespace Symfony\Component\Intl\Data\Bundle\Writer;

/**
 * Writes .json resource bundles.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class JsonBundleWriter implements BundleWriterInterface
{
    /**
     * {@inheritdoc}
     */
    public function write($path, $locale, $data)
    {
        if ($data instanceof \Traversable) {
            $data = iterator_to_array($data);
        }

        array_walk_recursive($data, function (&$value) {
            if ($value instanceof \Traversable) {
                $value = iterator_to_array($value);
            }
        });

        $contents = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)."\n";

        file_put_contents($path.'/'.$locale.'.json', $contents);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
