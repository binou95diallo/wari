<<<<<<< HEAD
<?php

use Twig\Node\Expression\FunctionExpression;

class_exists('Twig\Node\Expression\FunctionExpression');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Function" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\FunctionExpression" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\FunctionExpression" instead */
    class Twig_Node_Expression_Function extends FunctionExpression
    {
    }
}
=======
<?php

use Twig\Node\Expression\FunctionExpression;

class_exists('Twig\Node\Expression\FunctionExpression');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Function" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\FunctionExpression" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\FunctionExpression" instead */
    class Twig_Node_Expression_Function extends FunctionExpression
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
