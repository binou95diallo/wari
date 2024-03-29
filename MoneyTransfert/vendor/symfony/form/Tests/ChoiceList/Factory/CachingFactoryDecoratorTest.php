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

namespace Symfony\Component\Form\Tests\ChoiceList\Factory;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CachingFactoryDecoratorTest extends TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $decoratedFactory;

    /**
     * @var CachingFactoryDecorator
     */
    private $factory;

    protected function setUp()
    {
        $this->decoratedFactory = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\Factory\ChoiceListFactoryInterface')->getMock();
        $this->factory = new CachingFactoryDecorator($this->decoratedFactory);
    }

    public function testCreateFromChoicesEmpty()
    {
        $list = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createListFromChoices')
            ->with([])
            ->willReturn($list);

        $this->assertSame($list, $this->factory->createListFromChoices([]));
        $this->assertSame($list, $this->factory->createListFromChoices([]));
    }

    public function testCreateFromChoicesComparesTraversableChoicesAsArray()
    {
        // The top-most traversable is converted to an array
        $choices1 = new \ArrayIterator(['A' => 'a']);
        $choices2 = ['A' => 'a'];
        $list = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createListFromChoices')
            ->with($choices2)
            ->willReturn($list);

        $this->assertSame($list, $this->factory->createListFromChoices($choices1));
        $this->assertSame($list, $this->factory->createListFromChoices($choices2));
    }

    public function testCreateFromChoicesGroupedChoices()
    {
        $choices1 = ['key' => ['A' => 'a']];
        $choices2 = ['A' => 'a'];
        $list1 = new \stdClass();
        $list2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createListFromChoices')
            ->with($choices1)
            ->willReturn($list1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createListFromChoices')
            ->with($choices2)
            ->willReturn($list2);

        $this->assertSame($list1, $this->factory->createListFromChoices($choices1));
        $this->assertSame($list2, $this->factory->createListFromChoices($choices2));
    }

    /**
     * @dataProvider provideSameChoices
     */
    public function testCreateFromChoicesSameChoices($choice1, $choice2)
    {
        $choices1 = [$choice1];
        $choices2 = [$choice2];
        $list = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createListFromChoices')
            ->with($choices1)
            ->willReturn($list);

        $this->assertSame($list, $this->factory->createListFromChoices($choices1));
        $this->assertSame($list, $this->factory->createListFromChoices($choices2));
    }

    /**
     * @dataProvider provideDistinguishedChoices
     */
    public function testCreateFromChoicesDifferentChoices($choice1, $choice2)
    {
        $choices1 = [$choice1];
        $choices2 = [$choice2];
        $list1 = new \stdClass();
        $list2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createListFromChoices')
            ->with($choices1)
            ->willReturn($list1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createListFromChoices')
            ->with($choices2)
            ->willReturn($list2);

        $this->assertSame($list1, $this->factory->createListFromChoices($choices1));
        $this->assertSame($list2, $this->factory->createListFromChoices($choices2));
    }

    public function testCreateFromChoicesSameValueClosure()
    {
        $choices = [1];
        $list = new \stdClass();
        $closure = function () {};

        $this->decoratedFactory->expects($this->once())
            ->method('createListFromChoices')
            ->with($choices, $closure)
            ->willReturn($list);

        $this->assertSame($list, $this->factory->createListFromChoices($choices, $closure));
        $this->assertSame($list, $this->factory->createListFromChoices($choices, $closure));
    }

    public function testCreateFromChoicesDifferentValueClosure()
    {
        $choices = [1];
        $list1 = new \stdClass();
        $list2 = new \stdClass();
        $closure1 = function () {};
        $closure2 = function () {};

        $this->decoratedFactory->expects($this->at(0))
            ->method('createListFromChoices')
            ->with($choices, $closure1)
            ->willReturn($list1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createListFromChoices')
            ->with($choices, $closure2)
            ->willReturn($list2);

        $this->assertSame($list1, $this->factory->createListFromChoices($choices, $closure1));
        $this->assertSame($list2, $this->factory->createListFromChoices($choices, $closure2));
    }

    public function testCreateFromLoaderSameLoader()
    {
        $loader = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface')->getMock();
        $list = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createListFromLoader')
            ->with($loader)
            ->willReturn($list);

        $this->assertSame($list, $this->factory->createListFromLoader($loader));
        $this->assertSame($list, $this->factory->createListFromLoader($loader));
    }

    public function testCreateFromLoaderDifferentLoader()
    {
        $loader1 = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface')->getMock();
        $loader2 = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface')->getMock();
        $list1 = new \stdClass();
        $list2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createListFromLoader')
            ->with($loader1)
            ->willReturn($list1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createListFromLoader')
            ->with($loader2)
            ->willReturn($list2);

        $this->assertSame($list1, $this->factory->createListFromLoader($loader1));
        $this->assertSame($list2, $this->factory->createListFromLoader($loader2));
    }

    public function testCreateFromLoaderSameValueClosure()
    {
        $loader = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface')->getMock();
        $list = new \stdClass();
        $closure = function () {};

        $this->decoratedFactory->expects($this->once())
            ->method('createListFromLoader')
            ->with($loader, $closure)
            ->willReturn($list);

        $this->assertSame($list, $this->factory->createListFromLoader($loader, $closure));
        $this->assertSame($list, $this->factory->createListFromLoader($loader, $closure));
    }

    public function testCreateFromLoaderDifferentValueClosure()
    {
        $loader = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface')->getMock();
        $list1 = new \stdClass();
        $list2 = new \stdClass();
        $closure1 = function () {};
        $closure2 = function () {};

        $this->decoratedFactory->expects($this->at(0))
            ->method('createListFromLoader')
            ->with($loader, $closure1)
            ->willReturn($list1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createListFromLoader')
            ->with($loader, $closure2)
            ->willReturn($list2);

        $this->assertSame($list1, $this->factory->createListFromLoader($loader, $closure1));
        $this->assertSame($list2, $this->factory->createListFromLoader($loader, $closure2));
    }

    public function testCreateViewSamePreferredChoices()
    {
        $preferred = ['a'];
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, $preferred)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, $preferred));
        $this->assertSame($view, $this->factory->createView($list, $preferred));
    }

    public function testCreateViewDifferentPreferredChoices()
    {
        $preferred1 = ['a'];
        $preferred2 = ['b'];
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, $preferred1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, $preferred2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, $preferred1));
        $this->assertSame($view2, $this->factory->createView($list, $preferred2));
    }

    public function testCreateViewSamePreferredChoicesClosure()
    {
        $preferred = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, $preferred)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, $preferred));
        $this->assertSame($view, $this->factory->createView($list, $preferred));
    }

    public function testCreateViewDifferentPreferredChoicesClosure()
    {
        $preferred1 = function () {};
        $preferred2 = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, $preferred1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, $preferred2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, $preferred1));
        $this->assertSame($view2, $this->factory->createView($list, $preferred2));
    }

    public function testCreateViewSameLabelClosure()
    {
        $labels = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, null, $labels)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, null, $labels));
        $this->assertSame($view, $this->factory->createView($list, null, $labels));
    }

    public function testCreateViewDifferentLabelClosure()
    {
        $labels1 = function () {};
        $labels2 = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, null, $labels1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, null, $labels2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, null, $labels1));
        $this->assertSame($view2, $this->factory->createView($list, null, $labels2));
    }

    public function testCreateViewSameIndexClosure()
    {
        $index = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, null, null, $index)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, null, null, $index));
        $this->assertSame($view, $this->factory->createView($list, null, null, $index));
    }

    public function testCreateViewDifferentIndexClosure()
    {
        $index1 = function () {};
        $index2 = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, null, null, $index1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, null, null, $index2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, null, null, $index1));
        $this->assertSame($view2, $this->factory->createView($list, null, null, $index2));
    }

    public function testCreateViewSameGroupByClosure()
    {
        $groupBy = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, null, null, null, $groupBy)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, null, null, null, $groupBy));
        $this->assertSame($view, $this->factory->createView($list, null, null, null, $groupBy));
    }

    public function testCreateViewDifferentGroupByClosure()
    {
        $groupBy1 = function () {};
        $groupBy2 = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, null, null, null, $groupBy1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, null, null, null, $groupBy2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, null, null, null, $groupBy1));
        $this->assertSame($view2, $this->factory->createView($list, null, null, null, $groupBy2));
    }

    public function testCreateViewSameAttributes()
    {
        $attr = ['class' => 'foobar'];
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, null, null, null, null, $attr)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, null, null, null, null, $attr));
        $this->assertSame($view, $this->factory->createView($list, null, null, null, null, $attr));
    }

    public function testCreateViewDifferentAttributes()
    {
        $attr1 = ['class' => 'foobar1'];
        $attr2 = ['class' => 'foobar2'];
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, null, null, null, null, $attr1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, null, null, null, null, $attr2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, null, null, null, null, $attr1));
        $this->assertSame($view2, $this->factory->createView($list, null, null, null, null, $attr2));
    }

    public function testCreateViewSameAttributesClosure()
    {
        $attr = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, null, null, null, null, $attr)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, null, null, null, null, $attr));
        $this->assertSame($view, $this->factory->createView($list, null, null, null, null, $attr));
    }

    public function testCreateViewDifferentAttributesClosure()
    {
        $attr1 = function () {};
        $attr2 = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, null, null, null, null, $attr1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, null, null, null, null, $attr2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, null, null, null, null, $attr1));
        $this->assertSame($view2, $this->factory->createView($list, null, null, null, null, $attr2));
    }

    public function provideSameChoices()
    {
        $object = (object) ['foo' => 'bar'];

        return [
            [0, 0],
            ['a', 'a'],
            // https://github.com/symfony/symfony/issues/10409
            [\chr(181).'meter', \chr(181).'meter'], // UTF-8
            [$object, $object],
        ];
    }

    public function provideDistinguishedChoices()
    {
        return [
            [0, false],
            [0, null],
            [0, '0'],
            [0, ''],
            [1, true],
            [1, '1'],
            [1, 'a'],
            ['', false],
            ['', null],
            [false, null],
            // Same properties, but not identical
            [(object) ['foo' => 'bar'], (object) ['foo' => 'bar']],
        ];
    }

    public function provideSameKeyChoices()
    {
        // Only test types here that can be used as array keys
        return [
            [0, 0],
            [0, '0'],
            ['a', 'a'],
            [\chr(181).'meter', \chr(181).'meter'],
        ];
    }

    public function provideDistinguishedKeyChoices()
    {
        // Only test types here that can be used as array keys
        return [
            [0, ''],
            [1, 'a'],
            ['', 'a'],
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

namespace Symfony\Component\Form\Tests\ChoiceList\Factory;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CachingFactoryDecoratorTest extends TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $decoratedFactory;

    /**
     * @var CachingFactoryDecorator
     */
    private $factory;

    protected function setUp()
    {
        $this->decoratedFactory = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\Factory\ChoiceListFactoryInterface')->getMock();
        $this->factory = new CachingFactoryDecorator($this->decoratedFactory);
    }

    public function testCreateFromChoicesEmpty()
    {
        $list = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createListFromChoices')
            ->with([])
            ->willReturn($list);

        $this->assertSame($list, $this->factory->createListFromChoices([]));
        $this->assertSame($list, $this->factory->createListFromChoices([]));
    }

    public function testCreateFromChoicesComparesTraversableChoicesAsArray()
    {
        // The top-most traversable is converted to an array
        $choices1 = new \ArrayIterator(['A' => 'a']);
        $choices2 = ['A' => 'a'];
        $list = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createListFromChoices')
            ->with($choices2)
            ->willReturn($list);

        $this->assertSame($list, $this->factory->createListFromChoices($choices1));
        $this->assertSame($list, $this->factory->createListFromChoices($choices2));
    }

    public function testCreateFromChoicesGroupedChoices()
    {
        $choices1 = ['key' => ['A' => 'a']];
        $choices2 = ['A' => 'a'];
        $list1 = new \stdClass();
        $list2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createListFromChoices')
            ->with($choices1)
            ->willReturn($list1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createListFromChoices')
            ->with($choices2)
            ->willReturn($list2);

        $this->assertSame($list1, $this->factory->createListFromChoices($choices1));
        $this->assertSame($list2, $this->factory->createListFromChoices($choices2));
    }

    /**
     * @dataProvider provideSameChoices
     */
    public function testCreateFromChoicesSameChoices($choice1, $choice2)
    {
        $choices1 = [$choice1];
        $choices2 = [$choice2];
        $list = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createListFromChoices')
            ->with($choices1)
            ->willReturn($list);

        $this->assertSame($list, $this->factory->createListFromChoices($choices1));
        $this->assertSame($list, $this->factory->createListFromChoices($choices2));
    }

    /**
     * @dataProvider provideDistinguishedChoices
     */
    public function testCreateFromChoicesDifferentChoices($choice1, $choice2)
    {
        $choices1 = [$choice1];
        $choices2 = [$choice2];
        $list1 = new \stdClass();
        $list2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createListFromChoices')
            ->with($choices1)
            ->willReturn($list1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createListFromChoices')
            ->with($choices2)
            ->willReturn($list2);

        $this->assertSame($list1, $this->factory->createListFromChoices($choices1));
        $this->assertSame($list2, $this->factory->createListFromChoices($choices2));
    }

    public function testCreateFromChoicesSameValueClosure()
    {
        $choices = [1];
        $list = new \stdClass();
        $closure = function () {};

        $this->decoratedFactory->expects($this->once())
            ->method('createListFromChoices')
            ->with($choices, $closure)
            ->willReturn($list);

        $this->assertSame($list, $this->factory->createListFromChoices($choices, $closure));
        $this->assertSame($list, $this->factory->createListFromChoices($choices, $closure));
    }

    public function testCreateFromChoicesDifferentValueClosure()
    {
        $choices = [1];
        $list1 = new \stdClass();
        $list2 = new \stdClass();
        $closure1 = function () {};
        $closure2 = function () {};

        $this->decoratedFactory->expects($this->at(0))
            ->method('createListFromChoices')
            ->with($choices, $closure1)
            ->willReturn($list1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createListFromChoices')
            ->with($choices, $closure2)
            ->willReturn($list2);

        $this->assertSame($list1, $this->factory->createListFromChoices($choices, $closure1));
        $this->assertSame($list2, $this->factory->createListFromChoices($choices, $closure2));
    }

    public function testCreateFromLoaderSameLoader()
    {
        $loader = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface')->getMock();
        $list = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createListFromLoader')
            ->with($loader)
            ->willReturn($list);

        $this->assertSame($list, $this->factory->createListFromLoader($loader));
        $this->assertSame($list, $this->factory->createListFromLoader($loader));
    }

    public function testCreateFromLoaderDifferentLoader()
    {
        $loader1 = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface')->getMock();
        $loader2 = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface')->getMock();
        $list1 = new \stdClass();
        $list2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createListFromLoader')
            ->with($loader1)
            ->willReturn($list1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createListFromLoader')
            ->with($loader2)
            ->willReturn($list2);

        $this->assertSame($list1, $this->factory->createListFromLoader($loader1));
        $this->assertSame($list2, $this->factory->createListFromLoader($loader2));
    }

    public function testCreateFromLoaderSameValueClosure()
    {
        $loader = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface')->getMock();
        $list = new \stdClass();
        $closure = function () {};

        $this->decoratedFactory->expects($this->once())
            ->method('createListFromLoader')
            ->with($loader, $closure)
            ->willReturn($list);

        $this->assertSame($list, $this->factory->createListFromLoader($loader, $closure));
        $this->assertSame($list, $this->factory->createListFromLoader($loader, $closure));
    }

    public function testCreateFromLoaderDifferentValueClosure()
    {
        $loader = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface')->getMock();
        $list1 = new \stdClass();
        $list2 = new \stdClass();
        $closure1 = function () {};
        $closure2 = function () {};

        $this->decoratedFactory->expects($this->at(0))
            ->method('createListFromLoader')
            ->with($loader, $closure1)
            ->willReturn($list1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createListFromLoader')
            ->with($loader, $closure2)
            ->willReturn($list2);

        $this->assertSame($list1, $this->factory->createListFromLoader($loader, $closure1));
        $this->assertSame($list2, $this->factory->createListFromLoader($loader, $closure2));
    }

    public function testCreateViewSamePreferredChoices()
    {
        $preferred = ['a'];
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, $preferred)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, $preferred));
        $this->assertSame($view, $this->factory->createView($list, $preferred));
    }

    public function testCreateViewDifferentPreferredChoices()
    {
        $preferred1 = ['a'];
        $preferred2 = ['b'];
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, $preferred1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, $preferred2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, $preferred1));
        $this->assertSame($view2, $this->factory->createView($list, $preferred2));
    }

    public function testCreateViewSamePreferredChoicesClosure()
    {
        $preferred = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, $preferred)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, $preferred));
        $this->assertSame($view, $this->factory->createView($list, $preferred));
    }

    public function testCreateViewDifferentPreferredChoicesClosure()
    {
        $preferred1 = function () {};
        $preferred2 = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, $preferred1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, $preferred2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, $preferred1));
        $this->assertSame($view2, $this->factory->createView($list, $preferred2));
    }

    public function testCreateViewSameLabelClosure()
    {
        $labels = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, null, $labels)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, null, $labels));
        $this->assertSame($view, $this->factory->createView($list, null, $labels));
    }

    public function testCreateViewDifferentLabelClosure()
    {
        $labels1 = function () {};
        $labels2 = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, null, $labels1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, null, $labels2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, null, $labels1));
        $this->assertSame($view2, $this->factory->createView($list, null, $labels2));
    }

    public function testCreateViewSameIndexClosure()
    {
        $index = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, null, null, $index)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, null, null, $index));
        $this->assertSame($view, $this->factory->createView($list, null, null, $index));
    }

    public function testCreateViewDifferentIndexClosure()
    {
        $index1 = function () {};
        $index2 = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, null, null, $index1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, null, null, $index2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, null, null, $index1));
        $this->assertSame($view2, $this->factory->createView($list, null, null, $index2));
    }

    public function testCreateViewSameGroupByClosure()
    {
        $groupBy = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, null, null, null, $groupBy)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, null, null, null, $groupBy));
        $this->assertSame($view, $this->factory->createView($list, null, null, null, $groupBy));
    }

    public function testCreateViewDifferentGroupByClosure()
    {
        $groupBy1 = function () {};
        $groupBy2 = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, null, null, null, $groupBy1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, null, null, null, $groupBy2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, null, null, null, $groupBy1));
        $this->assertSame($view2, $this->factory->createView($list, null, null, null, $groupBy2));
    }

    public function testCreateViewSameAttributes()
    {
        $attr = ['class' => 'foobar'];
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, null, null, null, null, $attr)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, null, null, null, null, $attr));
        $this->assertSame($view, $this->factory->createView($list, null, null, null, null, $attr));
    }

    public function testCreateViewDifferentAttributes()
    {
        $attr1 = ['class' => 'foobar1'];
        $attr2 = ['class' => 'foobar2'];
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, null, null, null, null, $attr1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, null, null, null, null, $attr2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, null, null, null, null, $attr1));
        $this->assertSame($view2, $this->factory->createView($list, null, null, null, null, $attr2));
    }

    public function testCreateViewSameAttributesClosure()
    {
        $attr = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view = new \stdClass();

        $this->decoratedFactory->expects($this->once())
            ->method('createView')
            ->with($list, null, null, null, null, $attr)
            ->willReturn($view);

        $this->assertSame($view, $this->factory->createView($list, null, null, null, null, $attr));
        $this->assertSame($view, $this->factory->createView($list, null, null, null, null, $attr));
    }

    public function testCreateViewDifferentAttributesClosure()
    {
        $attr1 = function () {};
        $attr2 = function () {};
        $list = $this->getMockBuilder('Symfony\Component\Form\ChoiceList\ChoiceListInterface')->getMock();
        $view1 = new \stdClass();
        $view2 = new \stdClass();

        $this->decoratedFactory->expects($this->at(0))
            ->method('createView')
            ->with($list, null, null, null, null, $attr1)
            ->willReturn($view1);
        $this->decoratedFactory->expects($this->at(1))
            ->method('createView')
            ->with($list, null, null, null, null, $attr2)
            ->willReturn($view2);

        $this->assertSame($view1, $this->factory->createView($list, null, null, null, null, $attr1));
        $this->assertSame($view2, $this->factory->createView($list, null, null, null, null, $attr2));
    }

    public function provideSameChoices()
    {
        $object = (object) ['foo' => 'bar'];

        return [
            [0, 0],
            ['a', 'a'],
            // https://github.com/symfony/symfony/issues/10409
            [\chr(181).'meter', \chr(181).'meter'], // UTF-8
            [$object, $object],
        ];
    }

    public function provideDistinguishedChoices()
    {
        return [
            [0, false],
            [0, null],
            [0, '0'],
            [0, ''],
            [1, true],
            [1, '1'],
            [1, 'a'],
            ['', false],
            ['', null],
            [false, null],
            // Same properties, but not identical
            [(object) ['foo' => 'bar'], (object) ['foo' => 'bar']],
        ];
    }

    public function provideSameKeyChoices()
    {
        // Only test types here that can be used as array keys
        return [
            [0, 0],
            [0, '0'],
            ['a', 'a'],
            [\chr(181).'meter', \chr(181).'meter'],
        ];
    }

    public function provideDistinguishedKeyChoices()
    {
        // Only test types here that can be used as array keys
        return [
            [0, ''],
            [1, 'a'],
            ['', 'a'],
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
