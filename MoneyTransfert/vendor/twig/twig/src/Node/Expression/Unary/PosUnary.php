<<<<<<< HEAD
<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression\Unary;

use Twig\Compiler;

class PosUnary extends AbstractUnary
{
    public function operator(Compiler $compiler)
    {
        $compiler->raw('+');
    }
}

class_alias('Twig\Node\Expression\Unary\PosUnary', 'Twig_Node_Expression_Unary_Pos');
=======
<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression\Unary;

use Twig\Compiler;

class PosUnary extends AbstractUnary
{
    public function operator(Compiler $compiler)
    {
        $compiler->raw('+');
    }
}

class_alias('Twig\Node\Expression\Unary\PosUnary', 'Twig_Node_Expression_Unary_Pos');
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
