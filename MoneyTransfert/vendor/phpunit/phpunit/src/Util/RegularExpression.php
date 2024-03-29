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
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RegularExpression
{
    /**
     * @throws \Exception
     *
     * @return false|int
     */
    public static function safeMatch(string $pattern, string $subject, ?array $matches = null, int $flags = 0, int $offset = 0)
    {
        $handler_terminator = ErrorHandler::handleErrorOnce();
        $match              = \preg_match($pattern, $subject, $matches, $flags, $offset);
        $handler_terminator();

        return $match;
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
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RegularExpression
{
    /**
     * @throws \Exception
     *
     * @return false|int
     */
    public static function safeMatch(string $pattern, string $subject, ?array $matches = null, int $flags = 0, int $offset = 0)
    {
        $handler_terminator = ErrorHandler::handleErrorOnce();
        $match              = \preg_match($pattern, $subject, $matches, $flags, $offset);
        $handler_terminator();

        return $match;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
