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
namespace PHPUnit\Runner\Filter;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncludeGroupFilterIterator extends GroupFilterIterator
{
    protected function doAccept(string $hash): bool
    {
        return \in_array($hash, $this->groupTests, true);
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
namespace PHPUnit\Runner\Filter;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncludeGroupFilterIterator extends GroupFilterIterator
{
    protected function doAccept(string $hash): bool
    {
        return \in_array($hash, $this->groupTests, true);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
