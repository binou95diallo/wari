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

namespace Symfony\Bridge\Twig\Tests\TokenParser;

use PHPUnit\Framework\TestCase;
use Symfony\Bridge\Twig\Node\FormThemeNode;
use Symfony\Bridge\Twig\TokenParser\FormThemeTokenParser;
use Twig\Environment;
use Twig\Node\Expression\ArrayExpression;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\NameExpression;
use Twig\Parser;
use Twig\Source;

class FormThemeTokenParserTest extends TestCase
{
    /**
     * @dataProvider getTestsForFormTheme
     */
    public function testCompile($source, $expected)
    {
        $env = new Environment($this->getMockBuilder('Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false, 'optimizations' => 0]);
        $env->addTokenParser(new FormThemeTokenParser());
        $source = new Source($source, '');
        $stream = $env->tokenize($source);
        $parser = new Parser($env);

        if (method_exists($expected, 'setSourceContext')) {
            $expected->setSourceContext($source);
        }

        $this->assertEquals($expected, $parser->parse($stream)->getNode('body')->getNode(0));
    }

    public function getTestsForFormTheme()
    {
        return [
            [
                '{% form_theme form "tpl1" %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form "tpl1" "tpl2" %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                        new ConstantExpression(1, 1),
                        new ConstantExpression('tpl2', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form with "tpl1" %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ConstantExpression('tpl1', 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form with ["tpl1"] %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form with ["tpl1", "tpl2"] %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                        new ConstantExpression(1, 1),
                        new ConstantExpression('tpl2', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form with ["tpl1", "tpl2"] only %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                        new ConstantExpression(1, 1),
                        new ConstantExpression('tpl2', 1),
                    ], 1),
                    1,
                    'form_theme',
                    true
                ),
            ],
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

namespace Symfony\Bridge\Twig\Tests\TokenParser;

use PHPUnit\Framework\TestCase;
use Symfony\Bridge\Twig\Node\FormThemeNode;
use Symfony\Bridge\Twig\TokenParser\FormThemeTokenParser;
use Twig\Environment;
use Twig\Node\Expression\ArrayExpression;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\NameExpression;
use Twig\Parser;
use Twig\Source;

class FormThemeTokenParserTest extends TestCase
{
    /**
     * @dataProvider getTestsForFormTheme
     */
    public function testCompile($source, $expected)
    {
        $env = new Environment($this->getMockBuilder('Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false, 'optimizations' => 0]);
        $env->addTokenParser(new FormThemeTokenParser());
        $source = new Source($source, '');
        $stream = $env->tokenize($source);
        $parser = new Parser($env);

        if (method_exists($expected, 'setSourceContext')) {
            $expected->setSourceContext($source);
        }

        $this->assertEquals($expected, $parser->parse($stream)->getNode('body')->getNode(0));
    }

    public function getTestsForFormTheme()
    {
        return [
            [
                '{% form_theme form "tpl1" %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form "tpl1" "tpl2" %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                        new ConstantExpression(1, 1),
                        new ConstantExpression('tpl2', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form with "tpl1" %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ConstantExpression('tpl1', 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form with ["tpl1"] %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form with ["tpl1", "tpl2"] %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                        new ConstantExpression(1, 1),
                        new ConstantExpression('tpl2', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form with ["tpl1", "tpl2"] only %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                        new ConstantExpression(1, 1),
                        new ConstantExpression('tpl2', 1),
                    ], 1),
                    1,
                    'form_theme',
                    true
                ),
            ],
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
