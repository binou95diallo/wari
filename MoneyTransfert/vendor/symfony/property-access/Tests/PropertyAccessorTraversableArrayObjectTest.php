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

namespace Symfony\Component\PropertyAccess\Tests;

use Symfony\Component\PropertyAccess\Tests\Fixtures\TraversableArrayObject;

class PropertyAccessorTraversableArrayObjectTest extends PropertyAccessorCollectionTest
{
    protected function getContainer(array $array)
    {
        return new TraversableArrayObject($array);
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

namespace Symfony\Component\PropertyAccess\Tests;

use Symfony\Component\PropertyAccess\Tests\Fixtures\TraversableArrayObject;

class PropertyAccessorTraversableArrayObjectTest extends PropertyAccessorCollectionTest
{
    protected function getContainer(array $array)
    {
        return new TraversableArrayObject($array);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
