<<<<<<< HEAD
<?php

namespace Symfony\Component\Debug\Tests\Fixtures;

/**
 * @method string magicMethod()
 * @method static string staticMagicMethod()
 */
class VirtualClassMagicCall
{
    public static function __callStatic($name, $arguments)
    {
    }

    public function __call($name, $arguments)
    {
    }
}
=======
<?php

namespace Symfony\Component\Debug\Tests\Fixtures;

/**
 * @method string magicMethod()
 * @method static string staticMagicMethod()
 */
class VirtualClassMagicCall
{
    public static function __callStatic($name, $arguments)
    {
    }

    public function __call($name, $arguments)
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
