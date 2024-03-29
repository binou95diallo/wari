<<<<<<< HEAD
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

/**
 * @covers SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator
 */
final class TimeEfficientImplementationTest extends LongestCommonSubsequenceTest
{
    protected function createImplementation(): LongestCommonSubsequenceCalculator
    {
        return new TimeEfficientLongestCommonSubsequenceCalculator;
    }
}
=======
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

/**
 * @covers SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator
 */
final class TimeEfficientImplementationTest extends LongestCommonSubsequenceTest
{
    protected function createImplementation(): LongestCommonSubsequenceCalculator
    {
        return new TimeEfficientLongestCommonSubsequenceCalculator;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
