<<<<<<< HEAD
<?php

use Twig\TokenParser\IfTokenParser;

class_exists('Twig\TokenParser\IfTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_If" class is deprecated since Twig version 2.7, use "Twig\TokenParser\IfTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\IfTokenParser" instead */
    class Twig_TokenParser_If extends IfTokenParser
    {
    }
}
=======
<?php

use Twig\TokenParser\IfTokenParser;

class_exists('Twig\TokenParser\IfTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_If" class is deprecated since Twig version 2.7, use "Twig\TokenParser\IfTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\IfTokenParser" instead */
    class Twig_TokenParser_If extends IfTokenParser
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
