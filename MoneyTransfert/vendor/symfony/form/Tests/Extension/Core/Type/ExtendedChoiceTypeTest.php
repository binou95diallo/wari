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

namespace Symfony\Component\Form\Tests\Extension\Core\Type;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Tests\Fixtures\ChoiceTypeExtension;
use Symfony\Component\Form\Tests\Fixtures\LazyChoiceTypeExtension;

class ExtendedChoiceTypeTest extends TestCase
{
    /**
     * @dataProvider provideTestedTypes
     */
    public function testChoicesAreOverridden($type)
    {
        ChoiceTypeExtension::$extendedType = $type;
        $factory = Forms::createFormFactoryBuilder()
            ->addTypeExtension(new ChoiceTypeExtension())
            ->getFormFactory()
        ;

        $choices = $factory->create($type, null, ['choice_loader' => null])->createView()->vars['choices'];

        $this->assertCount(2, $choices);
        $this->assertSame('A', $choices[0]->label);
        $this->assertSame('a', $choices[0]->value);
        $this->assertSame('B', $choices[1]->label);
        $this->assertSame('b', $choices[1]->value);
    }

    /**
     * @dataProvider provideTestedTypes
     */
    public function testChoiceLoaderIsOverridden($type)
    {
        LazyChoiceTypeExtension::$extendedType = $type;
        $factory = Forms::createFormFactoryBuilder()
            ->addTypeExtension(new LazyChoiceTypeExtension())
            ->getFormFactory()
        ;

        $choices = $factory->create($type)->createView()->vars['choices'];

        $this->assertCount(2, $choices);
        $this->assertSame('Lazy A', $choices[0]->label);
        $this->assertSame('lazy_a', $choices[0]->value);
        $this->assertSame('Lazy B', $choices[1]->label);
        $this->assertSame('lazy_b', $choices[1]->value);
    }

    public function provideTestedTypes()
    {
        yield [CountryTypeTest::TESTED_TYPE];
        yield [CurrencyTypeTest::TESTED_TYPE];
        yield [LanguageTypeTest::TESTED_TYPE];
        yield [LocaleTypeTest::TESTED_TYPE];
        yield [TimezoneTypeTest::TESTED_TYPE];
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

namespace Symfony\Component\Form\Tests\Extension\Core\Type;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Tests\Fixtures\ChoiceTypeExtension;
use Symfony\Component\Form\Tests\Fixtures\LazyChoiceTypeExtension;

class ExtendedChoiceTypeTest extends TestCase
{
    /**
     * @dataProvider provideTestedTypes
     */
    public function testChoicesAreOverridden($type)
    {
        ChoiceTypeExtension::$extendedType = $type;
        $factory = Forms::createFormFactoryBuilder()
            ->addTypeExtension(new ChoiceTypeExtension())
            ->getFormFactory()
        ;

        $choices = $factory->create($type, null, ['choice_loader' => null])->createView()->vars['choices'];

        $this->assertCount(2, $choices);
        $this->assertSame('A', $choices[0]->label);
        $this->assertSame('a', $choices[0]->value);
        $this->assertSame('B', $choices[1]->label);
        $this->assertSame('b', $choices[1]->value);
    }

    /**
     * @dataProvider provideTestedTypes
     */
    public function testChoiceLoaderIsOverridden($type)
    {
        LazyChoiceTypeExtension::$extendedType = $type;
        $factory = Forms::createFormFactoryBuilder()
            ->addTypeExtension(new LazyChoiceTypeExtension())
            ->getFormFactory()
        ;

        $choices = $factory->create($type)->createView()->vars['choices'];

        $this->assertCount(2, $choices);
        $this->assertSame('Lazy A', $choices[0]->label);
        $this->assertSame('lazy_a', $choices[0]->value);
        $this->assertSame('Lazy B', $choices[1]->label);
        $this->assertSame('lazy_b', $choices[1]->value);
    }

    public function provideTestedTypes()
    {
        yield [CountryTypeTest::TESTED_TYPE];
        yield [CurrencyTypeTest::TESTED_TYPE];
        yield [LanguageTypeTest::TESTED_TYPE];
        yield [LocaleTypeTest::TESTED_TYPE];
        yield [TimezoneTypeTest::TESTED_TYPE];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
