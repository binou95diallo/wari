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

use PHPUnit\Framework\TestCase;
use Symfony\Component\ExpressionLanguage\Compiler;

abstract class AbstractNodeTest extends TestCase
{
    /**
     * @dataProvider getEvaluateData
     */
    public function testEvaluate($expected, $node, $variables = [], $functions = [])
    {
        $this->assertSame($expected, $node->evaluate($functions, $variables));
    }

    abstract public function getEvaluateData();

    /**
     * @dataProvider getCompileData
     */
    public function testCompile($expected, $node, $functions = [])
    {
        $compiler = new Compiler($functions);
        $node->compile($compiler);
        $this->assertSame($expected, $compiler->getSource());
    }

    abstract public function getCompileData();

    /**
     * @dataProvider getDumpData
     */
    public function testDump($expected, $node)
    {
        $this->assertSame($expected, $node->dump());
    }

    abstract public function getDumpData();
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

use PHPUnit\Framework\TestCase;
use Symfony\Component\ExpressionLanguage\Compiler;

abstract class AbstractNodeTest extends TestCase
{
    /**
     * @dataProvider getEvaluateData
     */
    public function testEvaluate($expected, $node, $variables = [], $functions = [])
    {
        $this->assertSame($expected, $node->evaluate($functions, $variables));
    }

    abstract public function getEvaluateData();

    /**
     * @dataProvider getCompileData
     */
    public function testCompile($expected, $node, $functions = [])
    {
        $compiler = new Compiler($functions);
        $node->compile($compiler);
        $this->assertSame($expected, $compiler->getSource());
    }

    abstract public function getCompileData();

    /**
     * @dataProvider getDumpData
     */
    public function testDump($expected, $node)
    {
        $this->assertSame($expected, $node->dump());
    }

    abstract public function getDumpData();
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
