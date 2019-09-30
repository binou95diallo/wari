<<<<<<< HEAD
<?php

namespace Vich\UploaderBundle\Util;

final class FilenameUtils
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Splits filename for array of basename and extension.
     *
     * @param string $filename
     *
     * @return array An array of basename and extension
     */
    public static function spitNameByExtension(string $filename): array
    {
        if (false === $pos = \strrpos($filename, '.')) {
            return [$filename, ''];
        }

        return [\substr($filename, 0, $pos), \substr($filename, $pos + 1)];
    }
}
=======
<?php

namespace Vich\UploaderBundle\Util;

final class FilenameUtils
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Splits filename for array of basename and extension.
     *
     * @param string $filename
     *
     * @return array An array of basename and extension
     */
    public static function spitNameByExtension(string $filename): array
    {
        if (false === $pos = \strrpos($filename, '.')) {
            return [$filename, ''];
        }

        return [\substr($filename, 0, $pos), \substr($filename, $pos + 1)];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
