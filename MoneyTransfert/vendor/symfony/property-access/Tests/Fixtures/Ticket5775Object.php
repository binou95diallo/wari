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

class Ticket5775Object
{
    private $property;

    public function getProperty()
    {
        return $this->property;
    }

    private function setProperty()
    {
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
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

class Ticket5775Object
{
    private $property;

    public function getProperty()
    {
        return $this->property;
    }

    private function setProperty()
    {
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
