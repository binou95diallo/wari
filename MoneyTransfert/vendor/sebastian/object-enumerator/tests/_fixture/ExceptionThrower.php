<<<<<<< HEAD
<?php
/*
 * This file is part of Object Enumerator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\ObjectEnumerator\Fixtures;

use RuntimeException;

class ExceptionThrower
{
    private $property;

    public function __construct()
    {
        unset($this->property);
    }

    public function __get($property)
    {
        throw new RuntimeException;
    }
}
=======
<?php
/*
 * This file is part of Object Enumerator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\ObjectEnumerator\Fixtures;

use RuntimeException;

class ExceptionThrower
{
    private $property;

    public function __construct()
    {
        unset($this->property);
    }

    public function __get($property)
    {
        throw new RuntimeException;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
