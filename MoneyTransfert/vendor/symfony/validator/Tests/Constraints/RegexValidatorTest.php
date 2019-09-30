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

use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\RegexValidator;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

class RegexValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new RegexValidator();
    }

    public function testNullIsValid()
    {
        $this->validator->validate(null, new Regex(['pattern' => '/^[0-9]+$/']));

        $this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        $this->validator->validate('', new Regex(['pattern' => '/^[0-9]+$/']));

        $this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        $this->expectException('Symfony\Component\Validator\Exception\UnexpectedValueException');
        $this->validator->validate(new \stdClass(), new Regex(['pattern' => '/^[0-9]+$/']));
    }

    /**
     * @dataProvider getValidValues
     */
    public function testValidValues($value)
    {
        $constraint = new Regex(['pattern' => '/^[0-9]+$/']);
        $this->validator->validate($value, $constraint);

        $this->assertNoViolation();
    }

    /**
     * @dataProvider getValidValuesWithWhitespaces
     */
    public function testValidValuesWithWhitespaces($value)
    {
        $constraint = new Regex(['pattern' => '/^[0-9]+$/', 'normalizer' => 'trim']);
        $this->validator->validate($value, $constraint);

        $this->assertNoViolation();
    }

    public function getValidValues()
    {
        return [
            [0],
            ['0'],
            ['090909'],
            [90909],
            [new class() {
                public function __toString()
                {
                    return '090909';
                }
            }],
        ];
    }

    public function getValidValuesWithWhitespaces()
    {
        return [
            ["\x207"],
            ["\x09\x09070707\x09\x09"],
            ["70707\x0A"],
            ["7\x0D\x0D"],
            ["\x00070707\x00"],
            ["\x0B\x0B70707\x0B\x0B"],
        ];
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues($value)
    {
        $constraint = new Regex([
            'pattern' => '/^[0-9]+$/',
            'message' => 'myMessage',
        ]);

        $this->validator->validate($value, $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '"'.$value.'"')
            ->setCode(Regex::REGEX_FAILED_ERROR)
            ->assertRaised();
    }

    public function getInvalidValues()
    {
        return [
            ['abcd'],
            ['090foo'],
            [new class() {
                public function __toString()
                {
                    return 'abcd';
                }
            }],
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

use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\RegexValidator;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

class RegexValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new RegexValidator();
    }

    public function testNullIsValid()
    {
        $this->validator->validate(null, new Regex(['pattern' => '/^[0-9]+$/']));

        $this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        $this->validator->validate('', new Regex(['pattern' => '/^[0-9]+$/']));

        $this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        $this->expectException('Symfony\Component\Validator\Exception\UnexpectedValueException');
        $this->validator->validate(new \stdClass(), new Regex(['pattern' => '/^[0-9]+$/']));
    }

    /**
     * @dataProvider getValidValues
     */
    public function testValidValues($value)
    {
        $constraint = new Regex(['pattern' => '/^[0-9]+$/']);
        $this->validator->validate($value, $constraint);

        $this->assertNoViolation();
    }

    /**
     * @dataProvider getValidValuesWithWhitespaces
     */
    public function testValidValuesWithWhitespaces($value)
    {
        $constraint = new Regex(['pattern' => '/^[0-9]+$/', 'normalizer' => 'trim']);
        $this->validator->validate($value, $constraint);

        $this->assertNoViolation();
    }

    public function getValidValues()
    {
        return [
            [0],
            ['0'],
            ['090909'],
            [90909],
            [new class() {
                public function __toString()
                {
                    return '090909';
                }
            }],
        ];
    }

    public function getValidValuesWithWhitespaces()
    {
        return [
            ["\x207"],
            ["\x09\x09070707\x09\x09"],
            ["70707\x0A"],
            ["7\x0D\x0D"],
            ["\x00070707\x00"],
            ["\x0B\x0B70707\x0B\x0B"],
        ];
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues($value)
    {
        $constraint = new Regex([
            'pattern' => '/^[0-9]+$/',
            'message' => 'myMessage',
        ]);

        $this->validator->validate($value, $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '"'.$value.'"')
            ->setCode(Regex::REGEX_FAILED_ERROR)
            ->assertRaised();
    }

    public function getInvalidValues()
    {
        return [
            ['abcd'],
            ['090foo'],
            [new class() {
                public function __toString()
                {
                    return 'abcd';
                }
            }],
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
