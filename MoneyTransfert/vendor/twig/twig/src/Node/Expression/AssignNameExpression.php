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

namespace Twig\Node\Expression;

use Twig\Compiler;

class AssignNameExpression extends NameExpression
{
    public function compile(Compiler $compiler)
    {
        $compiler
            ->raw('$context[')
            ->string($this->getAttribute('name'))
            ->raw(']')
        ;
    }
}

class_alias('Twig\Node\Expression\AssignNameExpression', 'Twig_Node_Expression_AssignName');
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

namespace Twig\Node\Expression;

use Twig\Compiler;

class AssignNameExpression extends NameExpression
{
    public function compile(Compiler $compiler)
    {
        $compiler
            ->raw('$context[')
            ->string($this->getAttribute('name'))
            ->raw(']')
        ;
    }
}

class_alias('Twig\Node\Expression\AssignNameExpression', 'Twig_Node_Expression_AssignName');
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
