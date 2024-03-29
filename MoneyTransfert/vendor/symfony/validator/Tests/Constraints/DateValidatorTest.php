<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator\Tests\Constraints;

use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateValidator;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

class DateValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new DateValidator();
    }

    public function testNullIsValid()
    {
        $this->validator->validate(null, new Date());

        $this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        $this->validator->validate('', new Date());

        $this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \DateTimeInterface with "Symfony\Component\Validator\Constraints\Date" is deprecated since version 4.2. Use "Symfony\Component\Validator\Constraints\Type" instead or remove the constraint if the underlying model is already type hinted to \DateTimeInterface.
     */
    public function testDateTimeClassIsValid()
    {
        $this->validator->validate(new \DateTime(), new Date());

        $this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \DateTimeInterface with "Symfony\Component\Validator\Constraints\Date" is deprecated since version 4.2. Use "Symfony\Component\Validator\Constraints\Type" instead or remove the constraint if the underlying model is already type hinted to \DateTimeInterface.
     */
    public function testDateTimeImmutableClassIsValid()
    {
        $this->validator->validate(new \DateTimeImmutable(), new Date());

        $this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        $this->expectException('Symfony\Component\Validator\Exception\UnexpectedValueException');
        $this->validator->validate(new \stdClass(), new Date());
    }

    /**
     * @dataProvider getValidDates
     */
    public function testValidDates($date)
    {
        $this->validator->validate($date, new Date());

        $this->assertNoViolation();
    }

    public function getValidDates()
    {
        return [
            ['2010-01-01'],
            ['1955-12-12'],
            ['2030-05-31'],
        ];
    }

    /**
     * @dataProvider getInvalidDates
     */
    public function testInvalidDates($date, $code)
    {
        $constraint = new Date([
            'message' => 'myMessage',
        ]);

        $this->validator->validate($date, $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '"'.$date.'"')
            ->setCode($code)
            ->assertRaised();
    }

    public function getInvalidDates()
    {
        return [
            ['foobar', Date::INVALID_FORMAT_ERROR],
            ['foobar 2010-13-01', Date::INVALID_FORMAT_ERROR],
            ['2010-13-01 foobar', Date::INVALID_FORMAT_ERROR],
            ['2010-13-01', Date::INVALID_DATE_ERROR],
            ['2010-04-32', Date::INVALID_DATE_ERROR],
            ['2010-02-29', Date::INVALID_DATE_ERROR],
        ];
    }
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator\Tests\Constraints;

use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateValidator;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

class DateValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new DateValidator();
    }

    public function testNullIsValid()
    {
        $this->validator->validate(null, new Date());

        $this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        $this->validator->validate('', new Date());

        $this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \DateTimeInterface with "Symfony\Component\Validator\Constraints\Date" is deprecated since version 4.2. Use "Symfony\Component\Validator\Constraints\Type" instead or remove the constraint if the underlying model is already type hinted to \DateTimeInterface.
     */
    public function testDateTimeClassIsValid()
    {
        $this->validator->validate(new \DateTime(), new Date());

        $this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \DateTimeInterface with "Symfony\Component\Validator\Constraints\Date" is deprecated since version 4.2. Use "Symfony\Component\Validator\Constraints\Type" instead or remove the constraint if the underlying model is already type hinted to \DateTimeInterface.
     */
    public function testDateTimeImmutableClassIsValid()
    {
        $this->validator->validate(new \DateTimeImmutable(), new Date());

        $this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        $this->expectException('Symfony\Component\Validator\Exception\UnexpectedValueException');
        $this->validator->validate(new \stdClass(), new Date());
    }

    /**
     * @dataProvider getValidDates
     */
    public function testValidDates($date)
    {
        $this->validator->validate($date, new Date());

        $this->assertNoViolation();
    }

    public function getValidDates()
    {
        return [
            ['2010-01-01'],
            ['1955-12-12'],
            ['2030-05-31'],
        ];
    }

    /**
     * @dataProvider getInvalidDates
     */
    public function testInvalidDates($date, $code)
    {
        $constraint = new Date([
            'message' => 'myMessage',
        ]);

        $this->validator->validate($date, $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '"'.$date.'"')
            ->setCode($code)
            ->assertRaised();
    }

    public function getInvalidDates()
    {
        return [
            ['foobar', Date::INVALID_FORMAT_ERROR],
            ['foobar 2010-13-01', Date::INVALID_FORMAT_ERROR],
            ['2010-13-01 foobar', Date::INVALID_FORMAT_ERROR],
            ['2010-13-01', Date::INVALID_DATE_ERROR],
            ['2010-04-32', Date::INVALID_DATE_ERROR],
            ['2010-02-29', Date::INVALID_DATE_ERROR],
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
