<<<<<<< HEAD
<?php

namespace Vich\UploaderBundle\Util;

use Behat\Transliterator\Transliterator as BehatTransliterator;

class Transliterator
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Transliterate a string. If string represents a filename, extension is kept.
     *
     * @param string $string
     * @param string $separator
     *
     * @return string
     */
    public static function transliterate(string $string, string $separator = '-'): string
    {
        [$filename, $extension] = FilenameUtils::spitNameByExtension($string);

        $transliterated = BehatTransliterator::transliterate($filename, $separator);
        if ('' !== $extension) {
            $transliterated .= '.'.$extension;
        }

        return $transliterated;
    }
}
=======
<?php

namespace Vich\UploaderBundle\Util;

use Behat\Transliterator\Transliterator as BehatTransliterator;

class Transliterator
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Transliterate a string. If string represents a filename, extension is kept.
     *
     * @param string $string
     * @param string $separator
     *
     * @return string
     */
    public static function transliterate(string $string, string $separator = '-'): string
    {
        [$filename, $extension] = FilenameUtils::spitNameByExtension($string);

        $transliterated = BehatTransliterator::transliterate($filename, $separator);
        if ('' !== $extension) {
            $transliterated .= '.'.$extension;
        }

        return $transliterated;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
