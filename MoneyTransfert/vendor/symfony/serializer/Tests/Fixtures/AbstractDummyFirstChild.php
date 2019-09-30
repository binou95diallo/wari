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

class AbstractDummyFirstChild extends AbstractDummy
{
    public $bar;

    public function __construct($foo = null, $bar = null)
    {
        parent::__construct($foo);

        $this->bar = $bar;
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

class AbstractDummyFirstChild extends AbstractDummy
{
    public $bar;

    public function __construct($foo = null, $bar = null)
    {
        parent::__construct($foo);

        $this->bar = $bar;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
