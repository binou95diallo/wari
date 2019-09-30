<<<<<<< HEAD
<?php

namespace Symfony\Component\HttpKernel\Tests\Fixtures;

class ResettableService
{
    public static $counter = 0;

    public function reset()
    {
        ++self::$counter;
    }
}
=======
<?php

namespace Symfony\Component\HttpKernel\Tests\Fixtures;

class ResettableService
{
    public static $counter = 0;

    public function reset()
    {
        ++self::$counter;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
