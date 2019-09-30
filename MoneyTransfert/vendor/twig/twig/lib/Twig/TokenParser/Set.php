<<<<<<< HEAD
<?php

use Twig\TokenParser\SetTokenParser;

class_exists('Twig\TokenParser\SetTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_Set" class is deprecated since Twig version 2.7, use "Twig\TokenParser\SetTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\SetTokenParser" instead */
    class Twig_TokenParser_Set extends SetTokenParser
    {
    }
}
=======
<?php

use Twig\TokenParser\SetTokenParser;

class_exists('Twig\TokenParser\SetTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_Set" class is deprecated since Twig version 2.7, use "Twig\TokenParser\SetTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\SetTokenParser" instead */
    class Twig_TokenParser_Set extends SetTokenParser
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
