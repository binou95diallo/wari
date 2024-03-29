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

namespace Symfony\Component\Intl\Tests\Collator;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Intl\Collator\Collator;

/**
 * Test case for Collator implementations.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractCollatorTest extends TestCase
{
    /**
     * @dataProvider asortProvider
     */
    public function testAsort($array, $sortFlag, $expected)
    {
        $collator = $this->getCollator('en');
        $collator->asort($array, $sortFlag);
        $this->assertSame($expected, $array);
    }

    public function asortProvider()
    {
        return [
            /* array, sortFlag, expected */
            [
                ['a', 'b', 'c'],
                Collator::SORT_REGULAR,
                ['a', 'b', 'c'],
            ],
            [
                ['c', 'b', 'a'],
                Collator::SORT_REGULAR,
                [2 => 'a', 1 => 'b',  0 => 'c'],
            ],
            [
                ['b', 'c', 'a'],
                Collator::SORT_REGULAR,
                [2 => 'a', 0 => 'b', 1 => 'c'],
            ],
        ];
    }

    /**
     * @param string $locale
     *
     * @return \Collator
     */
    abstract protected function getCollator($locale);
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

namespace Symfony\Component\Intl\Tests\Collator;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Intl\Collator\Collator;

/**
 * Test case for Collator implementations.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractCollatorTest extends TestCase
{
    /**
     * @dataProvider asortProvider
     */
    public function testAsort($array, $sortFlag, $expected)
    {
        $collator = $this->getCollator('en');
        $collator->asort($array, $sortFlag);
        $this->assertSame($expected, $array);
    }

    public function asortProvider()
    {
        return [
            /* array, sortFlag, expected */
            [
                ['a', 'b', 'c'],
                Collator::SORT_REGULAR,
                ['a', 'b', 'c'],
            ],
            [
                ['c', 'b', 'a'],
                Collator::SORT_REGULAR,
                [2 => 'a', 1 => 'b',  0 => 'c'],
            ],
            [
                ['b', 'c', 'a'],
                Collator::SORT_REGULAR,
                [2 => 'a', 0 => 'b', 1 => 'c'],
            ],
        ];
    }

    /**
     * @param string $locale
     *
     * @return \Collator
     */
    abstract protected function getCollator($locale);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
