<<<<<<< HEAD
<?php

use Twig\Node\Expression\NameExpression;

class_exists('Twig\Node\Expression\NameExpression');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Name" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\NameExpression" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\NameExpression" instead */
    class Twig_Node_Expression_Name extends NameExpression
    {
    }
}
=======
<?php

use Twig\Node\Expression\NameExpression;

class_exists('Twig\Node\Expression\NameExpression');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Name" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\NameExpression" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\NameExpression" instead */
    class Twig_Node_Expression_Name extends NameExpression
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
