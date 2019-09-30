<<<<<<< HEAD
<?php

use Twig\ExpressionParser;

class_exists('Twig\ExpressionParser');

@trigger_error(sprintf('Using the "Twig_ExpressionParser" class is deprecated since Twig version 2.7, use "Twig\ExpressionParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\ExpressionParser" instead */
    class Twig_ExpressionParser extends ExpressionParser
    {
    }
}
=======
<?php

use Twig\ExpressionParser;

class_exists('Twig\ExpressionParser');

@trigger_error(sprintf('Using the "Twig_ExpressionParser" class is deprecated since Twig version 2.7, use "Twig\ExpressionParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\ExpressionParser" instead */
    class Twig_ExpressionParser extends ExpressionParser
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
