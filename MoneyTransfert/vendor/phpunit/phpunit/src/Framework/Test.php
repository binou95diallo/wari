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
namespace PHPUnit\Framework;

use Countable;

/**
 * A Test can be run and collect its results.
 */
interface Test extends Countable
{
    /**
     * Runs a test and collects its result in a TestResult instance.
     */
    public function run(TestResult $result = null): TestResult;
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
namespace PHPUnit\Framework;

use Countable;

/**
 * A Test can be run and collect its results.
 */
interface Test extends Countable
{
    /**
     * Runs a test and collects its result in a TestResult instance.
     */
    public function run(TestResult $result = null): TestResult;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
