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

namespace Symfony\Component\ExpressionLanguage\Tests\Node;

use Symfony\Component\ExpressionLanguage\Node\ConstantNode;
use Symfony\Component\ExpressionLanguage\Node\UnaryNode;

class UnaryNodeTest extends AbstractNodeTest
{
    public function getEvaluateData()
    {
        return [
            [-1, new UnaryNode('-', new ConstantNode(1))],
            [3, new UnaryNode('+', new ConstantNode(3))],
            [false, new UnaryNode('!', new ConstantNode(true))],
            [false, new UnaryNode('not', new ConstantNode(true))],
        ];
    }

    public function getCompileData()
    {
        return [
            ['(-1)', new UnaryNode('-', new ConstantNode(1))],
            ['(+3)', new UnaryNode('+', new ConstantNode(3))],
            ['(!true)', new UnaryNode('!', new ConstantNode(true))],
            ['(!true)', new UnaryNode('not', new ConstantNode(true))],
        ];
    }

    public function getDumpData()
    {
        return [
            ['(- 1)', new UnaryNode('-', new ConstantNode(1))],
            ['(+ 3)', new UnaryNode('+', new ConstantNode(3))],
            ['(! true)', new UnaryNode('!', new ConstantNode(true))],
            ['(not true)', new UnaryNode('not', new ConstantNode(true))],
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

namespace Symfony\Component\ExpressionLanguage\Tests\Node;

use Symfony\Component\ExpressionLanguage\Node\ConstantNode;
use Symfony\Component\ExpressionLanguage\Node\UnaryNode;

class UnaryNodeTest extends AbstractNodeTest
{
    public function getEvaluateData()
    {
        return [
            [-1, new UnaryNode('-', new ConstantNode(1))],
            [3, new UnaryNode('+', new ConstantNode(3))],
            [false, new UnaryNode('!', new ConstantNode(true))],
            [false, new UnaryNode('not', new ConstantNode(true))],
        ];
    }

    public function getCompileData()
    {
        return [
            ['(-1)', new UnaryNode('-', new ConstantNode(1))],
            ['(+3)', new UnaryNode('+', new ConstantNode(3))],
            ['(!true)', new UnaryNode('!', new ConstantNode(true))],
            ['(!true)', new UnaryNode('not', new ConstantNode(true))],
        ];
    }

    public function getDumpData()
    {
        return [
            ['(- 1)', new UnaryNode('-', new ConstantNode(1))],
            ['(+ 3)', new UnaryNode('+', new ConstantNode(3))],
            ['(! true)', new UnaryNode('!', new ConstantNode(true))],
            ['(not true)', new UnaryNode('not', new ConstantNode(true))],
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
