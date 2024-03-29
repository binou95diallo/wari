<<<<<<< HEAD
<?php declare(strict_types=1);
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Driver;

/**
 * Driver for PCOV code coverage functionality.
 *
 * @codeCoverageIgnore
 */
final class PCOV implements Driver
{
    /**
     * Start collection of code coverage information.
     */
    public function start(bool $determineUnusedAndDead = true): void
    {
        \pcov\start();
    }

    /**
     * Stop collection of code coverage information.
     */
    public function stop(): array
    {
        \pcov\stop();

        $waiting = \pcov\waiting();
        $collect = [];

        if ($waiting) {
            $collect = \pcov\collect(\pcov\inclusive, $waiting);

            \pcov\clear();
        }

        return $collect;
    }
}
=======
<?php declare(strict_types=1);
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Driver;

/**
 * Driver for PCOV code coverage functionality.
 *
 * @codeCoverageIgnore
 */
final class PCOV implements Driver
{
    /**
     * Start collection of code coverage information.
     */
    public function start(bool $determineUnusedAndDead = true): void
    {
        \pcov\start();
    }

    /**
     * Stop collection of code coverage information.
     */
    public function stop(): array
    {
        \pcov\stop();

        $waiting = \pcov\waiting();
        $collect = [];

        if ($waiting) {
            $collect = \pcov\collect(\pcov\inclusive, $waiting);

            \pcov\clear();
        }

        return $collect;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
