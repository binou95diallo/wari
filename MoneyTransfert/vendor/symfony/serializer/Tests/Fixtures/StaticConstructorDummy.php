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

namespace Symfony\Component\Serializer\Tests\Fixtures;

class StaticConstructorDummy
{
    public $foo;
    public $bar;
    public $quz;

    public static function create($foo)
    {
        $dummy = new self();
        $dummy->quz = $foo;

        return $dummy;
    }

    private function __construct()
    {
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

namespace Symfony\Component\Serializer\Tests\Fixtures;

class StaticConstructorDummy
{
    public $foo;
    public $bar;
    public $quz;

    public static function create($foo)
    {
        $dummy = new self();
        $dummy->quz = $foo;

        return $dummy;
    }

    private function __construct()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
