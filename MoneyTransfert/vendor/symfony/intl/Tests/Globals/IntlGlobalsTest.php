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

namespace Symfony\Component\Intl\Tests\Globals;

use Symfony\Component\Intl\Globals\IntlGlobals;

class IntlGlobalsTest extends AbstractIntlGlobalsTest
{
    protected function getIntlErrorName($errorCode)
    {
        return IntlGlobals::getErrorName($errorCode);
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

namespace Symfony\Component\Intl\Tests\Globals;

use Symfony\Component\Intl\Globals\IntlGlobals;

class IntlGlobalsTest extends AbstractIntlGlobalsTest
{
    protected function getIntlErrorName($errorCode)
    {
        return IntlGlobals::getErrorName($errorCode);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
