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
namespace PHPUnit\Framework\MockObject\Matcher;

use PHPUnit\Framework\MockObject\Invocation as BaseInvocation;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class InvokedRecorder implements Invocation
{
    /**
     * @var BaseInvocation[]
     */
    private $invocations = [];

    public function getInvocationCount(): int
    {
        return \count($this->invocations);
    }

    /**
     * @return BaseInvocation[]
     */
    public function getInvocations(): array
    {
        return $this->invocations;
    }

    public function hasBeenInvoked(): bool
    {
        return \count($this->invocations) > 0;
    }

    public function invoked(BaseInvocation $invocation): void
    {
        $this->invocations[] = $invocation;
    }

    public function matches(BaseInvocation $invocation): bool
    {
        return true;
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
namespace PHPUnit\Framework\MockObject\Matcher;

use PHPUnit\Framework\MockObject\Invocation as BaseInvocation;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class InvokedRecorder implements Invocation
{
    /**
     * @var BaseInvocation[]
     */
    private $invocations = [];

    public function getInvocationCount(): int
    {
        return \count($this->invocations);
    }

    /**
     * @return BaseInvocation[]
     */
    public function getInvocations(): array
    {
        return $this->invocations;
    }

    public function hasBeenInvoked(): bool
    {
        return \count($this->invocations) > 0;
    }

    public function invoked(BaseInvocation $invocation): void
    {
        $this->invocations[] = $invocation;
    }

    public function matches(BaseInvocation $invocation): bool
    {
        return true;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
