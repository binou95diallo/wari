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
namespace PHPUnit\Framework\MockObject\Builder;

use PHPUnit\Framework\MockObject\Matcher\AnyParameters;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface ParametersMatch extends Match
{
    /**
     * Sets the parameters to match for, each parameter to this function will
     * be part of match. To perform specific matches or constraints create a
     * new PHPUnit\Framework\Constraint\Constraint and use it for the parameter.
     * If the parameter value is not a constraint it will use the
     * PHPUnit\Framework\Constraint\IsEqual for the value.
     *
     * Some examples:
     * <code>
     * // match first parameter with value 2
     * $b->with(2);
     * // match first parameter with value 'smock' and second identical to 42
     * $b->with('smock', new PHPUnit\Framework\Constraint\IsEqual(42));
     * </code>
     *
     * @return ParametersMatch
     */
    public function with(...$arguments);

    /**
     * Sets a matcher which allows any kind of parameters.
     *
     * Some examples:
     * <code>
     * // match any number of parameters
     * $b->withAnyParameters();
     * </code>
     *
     * @return AnyParameters
     */
    public function withAnyParameters();
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
namespace PHPUnit\Framework\MockObject\Builder;

use PHPUnit\Framework\MockObject\Matcher\AnyParameters;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface ParametersMatch extends Match
{
    /**
     * Sets the parameters to match for, each parameter to this function will
     * be part of match. To perform specific matches or constraints create a
     * new PHPUnit\Framework\Constraint\Constraint and use it for the parameter.
     * If the parameter value is not a constraint it will use the
     * PHPUnit\Framework\Constraint\IsEqual for the value.
     *
     * Some examples:
     * <code>
     * // match first parameter with value 2
     * $b->with(2);
     * // match first parameter with value 'smock' and second identical to 42
     * $b->with('smock', new PHPUnit\Framework\Constraint\IsEqual(42));
     * </code>
     *
     * @return ParametersMatch
     */
    public function with(...$arguments);

    /**
     * Sets a matcher which allows any kind of parameters.
     *
     * Some examples:
     * <code>
     * // match any number of parameters
     * $b->withAnyParameters();
     * </code>
     *
     * @return AnyParameters
     */
    public function withAnyParameters();
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
