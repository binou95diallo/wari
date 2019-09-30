<<<<<<< HEAD
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

class InterfaceNotFoundException extends ClassNotFoundException
{
    public function getInterfaceName()
    {
        return $this->getClassname();
    }
}
=======
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

class InterfaceNotFoundException extends ClassNotFoundException
{
    public function getInterfaceName()
    {
        return $this->getClassname();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
