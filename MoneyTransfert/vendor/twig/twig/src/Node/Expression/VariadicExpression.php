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

namespace Twig\Node\Expression;

use Twig\Compiler;

class VariadicExpression extends ArrayExpression
{
    public function compile(Compiler $compiler)
    {
        $compiler->raw('...');

        parent::compile($compiler);
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

namespace Twig\Node\Expression;

use Twig\Compiler;

class VariadicExpression extends ArrayExpression
{
    public function compile(Compiler $compiler)
    {
        $compiler->raw('...');

        parent::compile($compiler);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
