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
namespace Framework\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\Constraint\LogicalXor;
use PHPUnit\Framework\TestCase;

/**
 * @small
 */
final class LogicalXorTest extends TestCase
{
    public function testFromConstraintsReturnsConstraint(): void
    {
        $other = 'Foo';
        $count = 5;

        $constraints = \array_map(function () use ($other) {
            static $count = 0;

            $constraint = $this->getMockBuilder(Constraint::class)->getMock();

            $constraint
                ->expects($this->once())
                ->method('evaluate')
                ->with($this->identicalTo($other))
                ->willReturn($count % 2 === 1);

            ++$count;

            return $constraint;
        }, \array_fill(0, $count, null));

        $constraint = LogicalXor::fromConstraints(...$constraints);

        $this->assertInstanceOf(LogicalXor::class, $constraint);
        $this->assertTrue($constraint->evaluate($other, '', true));
    }

    public function testSetConstraintsWithNonConstraintsObjectArrayIsTreatedAsIsEqual(): void
    {
        $constraint = new LogicalXor;

        $constraint->setConstraints(['cuckoo']);

        $this->assertSame('is equal to \'cuckoo\'', $constraint->toString());
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
namespace Framework\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\Constraint\LogicalXor;
use PHPUnit\Framework\TestCase;

/**
 * @small
 */
final class LogicalXorTest extends TestCase
{
    public function testFromConstraintsReturnsConstraint(): void
    {
        $other = 'Foo';
        $count = 5;

        $constraints = \array_map(function () use ($other) {
            static $count = 0;

            $constraint = $this->getMockBuilder(Constraint::class)->getMock();

            $constraint
                ->expects($this->once())
                ->method('evaluate')
                ->with($this->identicalTo($other))
                ->willReturn($count % 2 === 1);

            ++$count;

            return $constraint;
        }, \array_fill(0, $count, null));

        $constraint = LogicalXor::fromConstraints(...$constraints);

        $this->assertInstanceOf(LogicalXor::class, $constraint);
        $this->assertTrue($constraint->evaluate($other, '', true));
    }

    public function testSetConstraintsWithNonConstraintsObjectArrayIsTreatedAsIsEqual(): void
    {
        $constraint = new LogicalXor;

        $constraint->setConstraints(['cuckoo']);

        $this->assertSame('is equal to \'cuckoo\'', $constraint->toString());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
