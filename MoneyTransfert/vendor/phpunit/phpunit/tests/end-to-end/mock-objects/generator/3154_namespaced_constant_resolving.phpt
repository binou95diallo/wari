<<<<<<< HEAD
--TEST--
https://github.com/sebastianbergmann/phpunit-mock-objects/issues/420
https://github.com/sebastianbergmann/phpunit/issues/3154
--FILE--
<?php declare(strict_types=1);
namespace Is\Namespaced;
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

const A_CONSTANT = 17;
const PHP_VERSION = "0.0.0";

class Issue3154
{
    public function a(int $i = PHP_INT_MAX, int $j = A_CONSTANT, string $v = \PHP_VERSION, string $z = '#'): string
    {
        return $z."sum: ".($i+$j).$v;
    }
}
require __DIR__ . '/../../../../vendor/autoload.php';

$generator = new \PHPUnit\Framework\MockObject\Generator;

$mock = $generator->generate(
    Issue3154::class,
    [],
    'Issue3154Mock',
    true,
    true
);

print $mock->getClassCode();
--EXPECTF--
declare(strict_types=1);

class Issue3154Mock extends Is\Namespaced\Issue3154 implements PHPUnit\Framework\MockObject\MockObject
{
    use \PHPUnit\Framework\MockObject\ConfigurableMethods;

    private $__phpunit_invocationMocker;
    private $__phpunit_originalObject;
    private $__phpunit_returnValueGeneration = true;

    public function __clone()
    {
        $this->__phpunit_invocationMocker = clone $this->__phpunit_getInvocationMocker();
    }

    public function a(int $i = PHP_INT_MAX, int $j = Is\Namespaced\A_CONSTANT, string $v = PHP_VERSION, string $z = '#'): string
    {
        $__phpunit_arguments = [$i, $j, $v, $z];
        $__phpunit_count     = func_num_args();

        if ($__phpunit_count > 4) {
            $__phpunit_arguments_tmp = func_get_args();

            for ($__phpunit_i = 4; $__phpunit_i < $__phpunit_count; $__phpunit_i++) {
                $__phpunit_arguments[] = $__phpunit_arguments_tmp[$__phpunit_i];
            }
        }

        $__phpunit_result = $this->__phpunit_getInvocationMocker()->invoke(
            new \PHPUnit\Framework\MockObject\Invocation(
                'Is\Namespaced\Issue3154', 'a', $__phpunit_arguments, ': string', $this, true
            )
        );

        return $__phpunit_result;
    }

    public function expects(\PHPUnit\Framework\MockObject\Matcher\Invocation $matcher): \PHPUnit\Framework\MockObject\Builder\InvocationMocker
    {
        return $this->__phpunit_getInvocationMocker()->expects($matcher);
    }

    public function method()
    {
        $any     = new \PHPUnit\Framework\MockObject\Matcher\AnyInvokedCount;
        $expects = $this->expects($any);

        return call_user_func_array([$expects, 'method'], func_get_args());
    }

    public function __phpunit_setOriginalObject($originalObject): void
    {
        $this->__phpunit_originalObject = $originalObject;
    }

    public function __phpunit_setReturnValueGeneration(bool $returnValueGeneration): void
    {
        $this->__phpunit_returnValueGeneration = $returnValueGeneration;
    }

    public function __phpunit_getInvocationMocker(): \PHPUnit\Framework\MockObject\InvocationMocker
    {
        if ($this->__phpunit_invocationMocker === null) {
            $this->__phpunit_invocationMocker = new \PHPUnit\Framework\MockObject\InvocationMocker(static::$__phpunit_configurableMethods, $this->__phpunit_returnValueGeneration);
        }

        return $this->__phpunit_invocationMocker;
    }

    public function __phpunit_hasMatchers(): bool
    {
        return $this->__phpunit_getInvocationMocker()->hasMatchers();
    }

    public function __phpunit_verify(bool $unsetInvocationMocker = true): void
    {
        $this->__phpunit_getInvocationMocker()->verify();

        if ($unsetInvocationMocker) {
            $this->__phpunit_invocationMocker = null;
        }
    }
}
=======
--TEST--
https://github.com/sebastianbergmann/phpunit-mock-objects/issues/420
https://github.com/sebastianbergmann/phpunit/issues/3154
--FILE--
<?php declare(strict_types=1);
namespace Is\Namespaced;
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

const A_CONSTANT = 17;
const PHP_VERSION = "0.0.0";

class Issue3154
{
    public function a(int $i = PHP_INT_MAX, int $j = A_CONSTANT, string $v = \PHP_VERSION, string $z = '#'): string
    {
        return $z."sum: ".($i+$j).$v;
    }
}
require __DIR__ . '/../../../../vendor/autoload.php';

$generator = new \PHPUnit\Framework\MockObject\Generator;

$mock = $generator->generate(
    Issue3154::class,
    [],
    'Issue3154Mock',
    true,
    true
);

print $mock->getClassCode();
--EXPECTF--
declare(strict_types=1);

class Issue3154Mock extends Is\Namespaced\Issue3154 implements PHPUnit\Framework\MockObject\MockObject
{
    use \PHPUnit\Framework\MockObject\ConfigurableMethods;

    private $__phpunit_invocationMocker;
    private $__phpunit_originalObject;
    private $__phpunit_returnValueGeneration = true;

    public function __clone()
    {
        $this->__phpunit_invocationMocker = clone $this->__phpunit_getInvocationMocker();
    }

    public function a(int $i = PHP_INT_MAX, int $j = Is\Namespaced\A_CONSTANT, string $v = PHP_VERSION, string $z = '#'): string
    {
        $__phpunit_arguments = [$i, $j, $v, $z];
        $__phpunit_count     = func_num_args();

        if ($__phpunit_count > 4) {
            $__phpunit_arguments_tmp = func_get_args();

            for ($__phpunit_i = 4; $__phpunit_i < $__phpunit_count; $__phpunit_i++) {
                $__phpunit_arguments[] = $__phpunit_arguments_tmp[$__phpunit_i];
            }
        }

        $__phpunit_result = $this->__phpunit_getInvocationMocker()->invoke(
            new \PHPUnit\Framework\MockObject\Invocation(
                'Is\Namespaced\Issue3154', 'a', $__phpunit_arguments, ': string', $this, true
            )
        );

        return $__phpunit_result;
    }

    public function expects(\PHPUnit\Framework\MockObject\Matcher\Invocation $matcher): \PHPUnit\Framework\MockObject\Builder\InvocationMocker
    {
        return $this->__phpunit_getInvocationMocker()->expects($matcher);
    }

    public function method()
    {
        $any     = new \PHPUnit\Framework\MockObject\Matcher\AnyInvokedCount;
        $expects = $this->expects($any);

        return call_user_func_array([$expects, 'method'], func_get_args());
    }

    public function __phpunit_setOriginalObject($originalObject): void
    {
        $this->__phpunit_originalObject = $originalObject;
    }

    public function __phpunit_setReturnValueGeneration(bool $returnValueGeneration): void
    {
        $this->__phpunit_returnValueGeneration = $returnValueGeneration;
    }

    public function __phpunit_getInvocationMocker(): \PHPUnit\Framework\MockObject\InvocationMocker
    {
        if ($this->__phpunit_invocationMocker === null) {
            $this->__phpunit_invocationMocker = new \PHPUnit\Framework\MockObject\InvocationMocker(static::$__phpunit_configurableMethods, $this->__phpunit_returnValueGeneration);
        }

        return $this->__phpunit_invocationMocker;
    }

    public function __phpunit_hasMatchers(): bool
    {
        return $this->__phpunit_getInvocationMocker()->hasMatchers();
    }

    public function __phpunit_verify(bool $unsetInvocationMocker = true): void
    {
        $this->__phpunit_getInvocationMocker()->verify();

        if ($unsetInvocationMocker) {
            $this->__phpunit_invocationMocker = null;
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
