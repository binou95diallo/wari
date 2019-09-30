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
use PHPUnit\Framework\TestSuite;

require_once 'OneTest.php';

require_once 'TwoTest.php';

class ChildSuite
{
    public static function suite()
    {
        $suite = new TestSuite('Child');
        $suite->addTestSuite(OneTest::class);
        $suite->addTestSuite(TwoTest::class);

        return $suite;
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
use PHPUnit\Framework\TestSuite;

require_once 'OneTest.php';

require_once 'TwoTest.php';

class ChildSuite
{
    public static function suite()
    {
        $suite = new TestSuite('Child');
        $suite->addTestSuite(OneTest::class);
        $suite->addTestSuite(TwoTest::class);

        return $suite;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
