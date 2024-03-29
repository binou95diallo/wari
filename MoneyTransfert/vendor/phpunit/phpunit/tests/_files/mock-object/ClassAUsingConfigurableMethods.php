<<<<<<< HEAD
<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestFixture\MockObject;

use PHPUnit\Framework\MockObject\ConfigurableMethods;

class ClassAUsingConfigurableMethods
{
    use ConfigurableMethods;

    public static function getConfigurableMethods(): array
    {
        return static::$__phpunit_configurableMethods;
    }
}
=======
<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestFixture\MockObject;

use PHPUnit\Framework\MockObject\ConfigurableMethods;

class ClassAUsingConfigurableMethods
{
    use ConfigurableMethods;

    public static function getConfigurableMethods(): array
    {
        return static::$__phpunit_configurableMethods;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
