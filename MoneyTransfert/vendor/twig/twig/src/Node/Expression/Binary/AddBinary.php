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

namespace Twig\Node\Expression\Binary;

use Twig\Compiler;

class AddBinary extends AbstractBinary
{
    public function operator(Compiler $compiler)
    {
        return $compiler->raw('+');
    }
}

class_alias('Twig\Node\Expression\Binary\AddBinary', 'Twig_Node_Expression_Binary_Add');
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

namespace Twig\Node\Expression\Binary;

use Twig\Compiler;

class AddBinary extends AbstractBinary
{
    public function operator(Compiler $compiler)
    {
        return $compiler->raw('+');
    }
}

class_alias('Twig\Node\Expression\Binary\AddBinary', 'Twig_Node_Expression_Binary_Add');
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
