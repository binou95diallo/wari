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

namespace Symfony\Component\Intl\Tests\Globals\Verification;

use Symfony\Component\Intl\Tests\Globals\AbstractIntlGlobalsTest;
use Symfony\Component\Intl\Util\IntlTestHelper;

/**
 * Verifies that {@link AbstractIntlGlobalsTest} matches the behavior of the
 * intl functions with a specific version of ICU.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IntlGlobalsTest extends AbstractIntlGlobalsTest
{
    protected function setUp()
    {
        IntlTestHelper::requireFullIntl($this, false);

        parent::setUp();
    }

    protected function getIntlErrorName($errorCode)
    {
        return intl_error_name($errorCode);
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

namespace Symfony\Component\Intl\Tests\Globals\Verification;

use Symfony\Component\Intl\Tests\Globals\AbstractIntlGlobalsTest;
use Symfony\Component\Intl\Util\IntlTestHelper;

/**
 * Verifies that {@link AbstractIntlGlobalsTest} matches the behavior of the
 * intl functions with a specific version of ICU.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IntlGlobalsTest extends AbstractIntlGlobalsTest
{
    protected function setUp()
    {
        IntlTestHelper::requireFullIntl($this, false);

        parent::setUp();
    }

    protected function getIntlErrorName($errorCode)
    {
        return intl_error_name($errorCode);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
