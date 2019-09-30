<<<<<<< HEAD
<?php

use Twig\TokenParser\ForTokenParser;

class_exists('Twig\TokenParser\ForTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_For" class is deprecated since Twig version 2.7, use "Twig\TokenParser\ForTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\ForTokenParser" instead */
    class Twig_TokenParser_For extends ForTokenParser
    {
    }
}
=======
<?php

use Twig\TokenParser\ForTokenParser;

class_exists('Twig\TokenParser\ForTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_For" class is deprecated since Twig version 2.7, use "Twig\TokenParser\ForTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\ForTokenParser" instead */
    class Twig_TokenParser_For extends ForTokenParser
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
