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

namespace Symfony\Component\CssSelector\Tests\Node;

use Symfony\Component\CssSelector\Node\ElementNode;
use Symfony\Component\CssSelector\Node\SelectorNode;

class SelectorNodeTest extends AbstractNodeTest
{
    public function getToStringConversionTestData()
    {
        return [
            [new SelectorNode(new ElementNode()), 'Selector[Element[*]]'],
            [new SelectorNode(new ElementNode(), 'pseudo'), 'Selector[Element[*]::pseudo]'],
        ];
    }

    public function getSpecificityValueTestData()
    {
        return [
            [new SelectorNode(new ElementNode()), 0],
            [new SelectorNode(new ElementNode(), 'pseudo'), 1],
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

namespace Symfony\Component\CssSelector\Tests\Node;

use Symfony\Component\CssSelector\Node\ElementNode;
use Symfony\Component\CssSelector\Node\SelectorNode;

class SelectorNodeTest extends AbstractNodeTest
{
    public function getToStringConversionTestData()
    {
        return [
            [new SelectorNode(new ElementNode()), 'Selector[Element[*]]'],
            [new SelectorNode(new ElementNode(), 'pseudo'), 'Selector[Element[*]::pseudo]'],
        ];
    }

    public function getSpecificityValueTestData()
    {
        return [
            [new SelectorNode(new ElementNode()), 0],
            [new SelectorNode(new ElementNode(), 'pseudo'), 1],
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
