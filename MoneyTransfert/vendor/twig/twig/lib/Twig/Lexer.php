<<<<<<< HEAD
<?php

use Twig\Lexer;

class_exists('Twig\Lexer');

@trigger_error(sprintf('Using the "Twig_Lexer" class is deprecated since Twig version 2.7, use "Twig\Lexer" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Lexer" instead */
    class Twig_Lexer extends Lexer
    {
    }
}
=======
<?php

use Twig\Lexer;

class_exists('Twig\Lexer');

@trigger_error(sprintf('Using the "Twig_Lexer" class is deprecated since Twig version 2.7, use "Twig\Lexer" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Lexer" instead */
    class Twig_Lexer extends Lexer
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
