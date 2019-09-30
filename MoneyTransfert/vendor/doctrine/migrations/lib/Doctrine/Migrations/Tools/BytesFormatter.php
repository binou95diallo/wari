<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools;

use function floor;
use function log;
use function pow;
use function round;

/**
 * The BytesFormatter class is responsible for converting a bytes integer to a more human readable string.
 * This class is used to format the memory used for display purposes when executing migrations.
 *
 * @internal
 */
final class BytesFormatter
{
    public static function formatBytes(float $size, int $precision = 2) : string
    {
        $base     = log($size, 1024);
        $suffixes = ['', 'K', 'M', 'G', 'T'];

        return round(pow(1024, $base - floor($base)), $precision) . $suffixes[(int) floor($base)];
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools;

use function floor;
use function log;
use function pow;
use function round;

/**
 * The BytesFormatter class is responsible for converting a bytes integer to a more human readable string.
 * This class is used to format the memory used for display purposes when executing migrations.
 *
 * @internal
 */
final class BytesFormatter
{
    public static function formatBytes(float $size, int $precision = 2) : string
    {
        $base     = log($size, 1024);
        $suffixes = ['', 'K', 'M', 'G', 'T'];

        return round(pow(1024, $base - floor($base)), $precision) . $suffixes[(int) floor($base)];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
