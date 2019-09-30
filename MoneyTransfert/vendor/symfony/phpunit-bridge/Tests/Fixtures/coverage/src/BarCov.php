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

namespace PhpUnitCoverageTest;

class BarCov
{
    private $foo;

    public function __construct(FooCov $foo)
    {
        $this->foo = $foo;
    }

    public function barZ()
    {
        $this->foo->fooZ();

        return 'bar';
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

namespace PhpUnitCoverageTest;

class BarCov
{
    private $foo;

    public function __construct(FooCov $foo)
    {
        $this->foo = $foo;
    }

    public function barZ()
    {
        $this->foo->fooZ();

        return 'bar';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
