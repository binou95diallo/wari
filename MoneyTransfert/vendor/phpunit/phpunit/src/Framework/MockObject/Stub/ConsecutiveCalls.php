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
namespace PHPUnit\Framework\MockObject\Stub;

use PHPUnit\Framework\MockObject\Invocation;
use PHPUnit\Framework\MockObject\Stub;
use SebastianBergmann\Exporter\Exporter;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConsecutiveCalls implements Stub
{
    /**
     * @var array
     */
    private $stack;

    /**
     * @var mixed
     */
    private $value;

    public function __construct(array $stack)
    {
        $this->stack = $stack;
    }

    public function invoke(Invocation $invocation)
    {
        $this->value = \array_shift($this->stack);

        if ($this->value instanceof Stub) {
            $this->value = $this->value->invoke($invocation);
        }

        return $this->value;
    }

    public function toString(): string
    {
        $exporter = new Exporter;

        return \sprintf(
            'return user-specified value %s',
            $exporter->export($this->value)
        );
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
namespace PHPUnit\Framework\MockObject\Stub;

use PHPUnit\Framework\MockObject\Invocation;
use PHPUnit\Framework\MockObject\Stub;
use SebastianBergmann\Exporter\Exporter;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConsecutiveCalls implements Stub
{
    /**
     * @var array
     */
    private $stack;

    /**
     * @var mixed
     */
    private $value;

    public function __construct(array $stack)
    {
        $this->stack = $stack;
    }

    public function invoke(Invocation $invocation)
    {
        $this->value = \array_shift($this->stack);

        if ($this->value instanceof Stub) {
            $this->value = $this->value->invoke($invocation);
        }

        return $this->value;
    }

    public function toString(): string
    {
        $exporter = new Exporter;

        return \sprintf(
            'return user-specified value %s',
            $exporter->export($this->value)
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
