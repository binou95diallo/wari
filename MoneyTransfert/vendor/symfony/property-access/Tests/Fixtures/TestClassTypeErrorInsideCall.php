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

namespace Symfony\Component\PropertyAccess\Tests\Fixtures;

class TestClassTypeErrorInsideCall
{
    public function expectsDateTime(\DateTime $date)
    {
    }

    public function getProperty()
    {
    }

    public function setProperty($property)
    {
        $this->expectsDateTime(null); // throws TypeError
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

namespace Symfony\Component\PropertyAccess\Tests\Fixtures;

class TestClassTypeErrorInsideCall
{
    public function expectsDateTime(\DateTime $date)
    {
    }

    public function getProperty()
    {
    }

    public function setProperty($property)
    {
        $this->expectsDateTime(null); // throws TypeError
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
