<<<<<<< HEAD
<?php

use Twig\TokenParser\AbstractTokenParser;

class_exists('Twig\TokenParser\AbstractTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser" class is deprecated since Twig version 2.7, use "Twig\TokenParser\AbstractTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\AbstractTokenParser" instead */
    class Twig_TokenParser extends AbstractTokenParser
    {
    }
}
=======
<?php

use Twig\TokenParser\AbstractTokenParser;

class_exists('Twig\TokenParser\AbstractTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser" class is deprecated since Twig version 2.7, use "Twig\TokenParser\AbstractTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\AbstractTokenParser" instead */
    class Twig_TokenParser extends AbstractTokenParser
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
