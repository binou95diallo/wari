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

class Twig_Tests_Grammar_NumberTest extends \PHPUnit\Framework\TestCase
{
    public function testMagicToString()
    {
        $grammar = new Twig_Extensions_Grammar_Number('foo');
        $this->assertEquals('<foo:number>', (string) $grammar);
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

class Twig_Tests_Grammar_NumberTest extends \PHPUnit\Framework\TestCase
{
    public function testMagicToString()
    {
        $grammar = new Twig_Extensions_Grammar_Number('foo');
        $this->assertEquals('<foo:number>', (string) $grammar);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
