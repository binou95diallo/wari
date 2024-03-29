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

namespace Symfony\Component\Intl\Data\Provider;

use Symfony\Component\Intl\Data\Bundle\Reader\BundleEntryReaderInterface;

/**
 * Data provider for locale-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal to be removed in 5.0.
 */
class LocaleDataProvider
{
    private $path;
    private $reader;

    /**
     * Creates a data provider that reads locale-related data from .res files.
     *
     * @param string                     $path   The path to the directory containing the .res files
     * @param BundleEntryReaderInterface $reader The reader for reading the .res files
     */
    public function __construct(string $path, BundleEntryReaderInterface $reader)
    {
        $this->path = $path;
        $this->reader = $reader;
    }

    public function getLocales()
    {
        return $this->reader->readEntry($this->path, 'meta', ['Locales']);
    }

    public function getAliases()
    {
        $aliases = $this->reader->readEntry($this->path, 'meta', ['Aliases']);

        if ($aliases instanceof \Traversable) {
            $aliases = iterator_to_array($aliases);
        }

        return $aliases;
    }

    public function getName($locale, $displayLocale = null)
    {
        if (null === $displayLocale) {
            $displayLocale = \Locale::getDefault();
        }

        return $this->reader->readEntry($this->path, $displayLocale, ['Names', $locale]);
    }

    public function getNames($displayLocale = null)
    {
        if (null === $displayLocale) {
            $displayLocale = \Locale::getDefault();
        }

        $names = $this->reader->readEntry($this->path, $displayLocale, ['Names']);

        if ($names instanceof \Traversable) {
            $names = iterator_to_array($names);
        }

        $collator = new \Collator($displayLocale);
        $collator->asort($names);

        return $names;
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

namespace Symfony\Component\Intl\Data\Provider;

use Symfony\Component\Intl\Data\Bundle\Reader\BundleEntryReaderInterface;

/**
 * Data provider for locale-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal to be removed in 5.0.
 */
class LocaleDataProvider
{
    private $path;
    private $reader;

    /**
     * Creates a data provider that reads locale-related data from .res files.
     *
     * @param string                     $path   The path to the directory containing the .res files
     * @param BundleEntryReaderInterface $reader The reader for reading the .res files
     */
    public function __construct(string $path, BundleEntryReaderInterface $reader)
    {
        $this->path = $path;
        $this->reader = $reader;
    }

    public function getLocales()
    {
        return $this->reader->readEntry($this->path, 'meta', ['Locales']);
    }

    public function getAliases()
    {
        $aliases = $this->reader->readEntry($this->path, 'meta', ['Aliases']);

        if ($aliases instanceof \Traversable) {
            $aliases = iterator_to_array($aliases);
        }

        return $aliases;
    }

    public function getName($locale, $displayLocale = null)
    {
        if (null === $displayLocale) {
            $displayLocale = \Locale::getDefault();
        }

        return $this->reader->readEntry($this->path, $displayLocale, ['Names', $locale]);
    }

    public function getNames($displayLocale = null)
    {
        if (null === $displayLocale) {
            $displayLocale = \Locale::getDefault();
        }

        $names = $this->reader->readEntry($this->path, $displayLocale, ['Names']);

        if ($names instanceof \Traversable) {
            $names = iterator_to_array($names);
        }

        $collator = new \Collator($displayLocale);
        $collator->asort($names);

        return $names;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
