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

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface MethodNameMatch extends ParametersMatch
{
    /**
     * Adds a new method name match and returns the parameter match object for
     * further matching possibilities.
     *
     * @param \PHPUnit\Framework\Constraint\Constraint $name Constraint for matching method, if a string is passed it will use the PHPUnit_Framework_Constraint_IsEqual
     *
     * @return ParametersMatch
     */
    public function method($name);
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

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface MethodNameMatch extends ParametersMatch
{
    /**
     * Adds a new method name match and returns the parameter match object for
     * further matching possibilities.
     *
     * @param \PHPUnit\Framework\Constraint\Constraint $name Constraint for matching method, if a string is passed it will use the PHPUnit_Framework_Constraint_IsEqual
     *
     * @return ParametersMatch
     */
    public function method($name);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
