<<<<<<< HEAD
<?php

use Twig\TokenParser\FilterTokenParser;

class_exists('Twig\TokenParser\FilterTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_Filter" class is deprecated since Twig version 2.7, use "Twig\TokenParser\FilterTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\FilterTokenParser" instead */
    class Twig_TokenParser_Filter extends FilterTokenParser
    {
    }
}
=======
<?php

use Twig\TokenParser\FilterTokenParser;

class_exists('Twig\TokenParser\FilterTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_Filter" class is deprecated since Twig version 2.7, use "Twig\TokenParser\FilterTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\FilterTokenParser" instead */
    class Twig_TokenParser_Filter extends FilterTokenParser
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
