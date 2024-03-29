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
namespace PHPUnit\Framework\MockObject;

use PHPUnit\Framework\MockObject\Builder\InvocationMocker as BuilderInvocationMocker;
use PHPUnit\Framework\MockObject\Matcher\Invocation;

/**
 * @method BuilderInvocationMocker method($constraint)
 */
interface MockObject /*extends Verifiable*/
{
    public function __phpunit_setOriginalObject($originalObject): void;

    public function __phpunit_getInvocationMocker(): InvocationMocker;

    public function __phpunit_verify(bool $unsetInvocationMocker = true): void;

    public function __phpunit_hasMatchers(): bool;

    public function __phpunit_setReturnValueGeneration(bool $returnValueGeneration): void;

    public function expects(Invocation $matcher): BuilderInvocationMocker;
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
namespace PHPUnit\Framework\MockObject;

use PHPUnit\Framework\MockObject\Builder\InvocationMocker as BuilderInvocationMocker;
use PHPUnit\Framework\MockObject\Matcher\Invocation;

/**
 * @method BuilderInvocationMocker method($constraint)
 */
interface MockObject /*extends Verifiable*/
{
    public function __phpunit_setOriginalObject($originalObject): void;

    public function __phpunit_getInvocationMocker(): InvocationMocker;

    public function __phpunit_verify(bool $unsetInvocationMocker = true): void;

    public function __phpunit_hasMatchers(): bool;

    public function __phpunit_setReturnValueGeneration(bool $returnValueGeneration): void;

    public function expects(Invocation $matcher): BuilderInvocationMocker;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
