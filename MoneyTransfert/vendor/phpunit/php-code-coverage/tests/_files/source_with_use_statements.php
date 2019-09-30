<<<<<<< HEAD
<?php
namespace SebastianBergmann\CodeCoverage\TestFixture;

use stdClass;
use function array_filter;
use const ARRAY_FILTER_USE_BOTH;

class C
{
    public function m(): void
    {
        $o = new stdClass;

        array_filter(
            ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4],
            static function ($v, $k)
            {
                return $k === 'b' || $v === 4;
            },
            ARRAY_FILTER_USE_BOTH
        );
    }
}
=======
<?php
namespace SebastianBergmann\CodeCoverage\TestFixture;

use stdClass;
use function array_filter;
use const ARRAY_FILTER_USE_BOTH;

class C
{
    public function m(): void
    {
        $o = new stdClass;

        array_filter(
            ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4],
            static function ($v, $k)
            {
                return $k === 'b' || $v === 4;
            },
            ARRAY_FILTER_USE_BOTH
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
