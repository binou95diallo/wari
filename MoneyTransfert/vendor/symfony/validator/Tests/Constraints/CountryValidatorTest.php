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

use Symfony\Component\Intl\Util\IntlTestHelper;
use Symfony\Component\Validator\Constraints\Country;
use Symfony\Component\Validator\Constraints\CountryValidator;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

class CountryValidatorTest extends ConstraintValidatorTestCase
{
    private $defaultLocale;

    protected function setUp(): void
    {
        parent::setUp();

        $this->defaultLocale = \Locale::getDefault();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        \Locale::setDefault($this->defaultLocale);
    }

    protected function createValidator()
    {
        return new CountryValidator();
    }

    public function testNullIsValid()
    {
        $this->validator->validate(null, new Country());

        $this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        $this->validator->validate('', new Country());

        $this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        $this->expectException('Symfony\Component\Validator\Exception\UnexpectedValueException');
        $this->validator->validate(new \stdClass(), new Country());
    }

    /**
     * @dataProvider getValidCountries
     */
    public function testValidCountries($country)
    {
        $this->validator->validate($country, new Country());

        $this->assertNoViolation();
    }

    public function getValidCountries()
    {
        return [
            ['GB'],
            ['AT'],
            ['MY'],
        ];
    }

    /**
     * @dataProvider getInvalidCountries
     */
    public function testInvalidCountries($country)
    {
        $constraint = new Country([
            'message' => 'myMessage',
        ]);

        $this->validator->validate($country, $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '"'.$country.'"')
            ->setCode(Country::NO_SUCH_COUNTRY_ERROR)
            ->assertRaised();
    }

    public function getInvalidCountries()
    {
        return [
            ['foobar'],
            ['EN'],
        ];
    }

    public function testValidateUsingCountrySpecificLocale()
    {
        // in order to test with "en_GB"
        IntlTestHelper::requireFullIntl($this, false);

        \Locale::setDefault('en_GB');

        $existingCountry = 'GB';

        $this->validator->validate($existingCountry, new Country());

        $this->assertNoViolation();
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

use Symfony\Component\Intl\Util\IntlTestHelper;
use Symfony\Component\Validator\Constraints\Country;
use Symfony\Component\Validator\Constraints\CountryValidator;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

class CountryValidatorTest extends ConstraintValidatorTestCase
{
    private $defaultLocale;

    protected function setUp(): void
    {
        parent::setUp();

        $this->defaultLocale = \Locale::getDefault();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        \Locale::setDefault($this->defaultLocale);
    }

    protected function createValidator()
    {
        return new CountryValidator();
    }

    public function testNullIsValid()
    {
        $this->validator->validate(null, new Country());

        $this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        $this->validator->validate('', new Country());

        $this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        $this->expectException('Symfony\Component\Validator\Exception\UnexpectedValueException');
        $this->validator->validate(new \stdClass(), new Country());
    }

    /**
     * @dataProvider getValidCountries
     */
    public function testValidCountries($country)
    {
        $this->validator->validate($country, new Country());

        $this->assertNoViolation();
    }

    public function getValidCountries()
    {
        return [
            ['GB'],
            ['AT'],
            ['MY'],
        ];
    }

    /**
     * @dataProvider getInvalidCountries
     */
    public function testInvalidCountries($country)
    {
        $constraint = new Country([
            'message' => 'myMessage',
        ]);

        $this->validator->validate($country, $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '"'.$country.'"')
            ->setCode(Country::NO_SUCH_COUNTRY_ERROR)
            ->assertRaised();
    }

    public function getInvalidCountries()
    {
        return [
            ['foobar'],
            ['EN'],
        ];
    }

    public function testValidateUsingCountrySpecificLocale()
    {
        // in order to test with "en_GB"
        IntlTestHelper::requireFullIntl($this, false);

        \Locale::setDefault('en_GB');

        $existingCountry = 'GB';

        $this->validator->validate($existingCountry, new Country());

        $this->assertNoViolation();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
