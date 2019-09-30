<<<<<<< HEAD
<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Twig\Compiler;
use Twig\Environment;
use Twig\Loader\LoaderInterface;

class Twig_Tests_CompilerTest extends \PHPUnit\Framework\TestCase
{
    public function testReprNumericValueWithLocale()
    {
        $compiler = new Compiler(new Environment($this->getMockBuilder(LoaderInterface::class)->getMock()));

        $locale = setlocale(LC_NUMERIC, 0);
        if (false === $locale) {
            $this->markTestSkipped('Your platform does not support locales.');
        }

        $required_locales = ['fr_FR.UTF-8', 'fr_FR.UTF8', 'fr_FR.utf-8', 'fr_FR.utf8', 'French_France.1252'];
        if (false === setlocale(LC_NUMERIC, $required_locales)) {
            $this->markTestSkipped('Could not set any of required locales: '.implode(', ', $required_locales));
        }

        $this->assertEquals('1.2', $compiler->repr(1.2)->getSource());
        $this->assertContains('fr', strtolower(setlocale(LC_NUMERIC, 0)));

        setlocale(LC_NUMERIC, $locale);
    }
}
=======
<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Twig\Compiler;
use Twig\Environment;
use Twig\Loader\LoaderInterface;

class Twig_Tests_CompilerTest extends \PHPUnit\Framework\TestCase
{
    public function testReprNumericValueWithLocale()
    {
        $compiler = new Compiler(new Environment($this->getMockBuilder(LoaderInterface::class)->getMock()));

        $locale = setlocale(LC_NUMERIC, 0);
        if (false === $locale) {
            $this->markTestSkipped('Your platform does not support locales.');
        }

        $required_locales = ['fr_FR.UTF-8', 'fr_FR.UTF8', 'fr_FR.utf-8', 'fr_FR.utf8', 'French_France.1252'];
        if (false === setlocale(LC_NUMERIC, $required_locales)) {
            $this->markTestSkipped('Could not set any of required locales: '.implode(', ', $required_locales));
        }

        $this->assertEquals('1.2', $compiler->repr(1.2)->getSource());
        $this->assertContains('fr', strtolower(setlocale(LC_NUMERIC, 0)));

        setlocale(LC_NUMERIC, $locale);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
