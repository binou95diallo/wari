<<<<<<< HEAD
<?php

use Twig\TokenParser\IncludeTokenParser;

class_exists('Twig\TokenParser\IncludeTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_Include" class is deprecated since Twig version 2.7, use "Twig\TokenParser\IncludeTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\IncludeTokenParser" instead */
    class Twig_TokenParser_Include extends IncludeTokenParser
    {
    }
}
=======
<?php

use Twig\TokenParser\IncludeTokenParser;

class_exists('Twig\TokenParser\IncludeTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_Include" class is deprecated since Twig version 2.7, use "Twig\TokenParser\IncludeTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\IncludeTokenParser" instead */
    class Twig_TokenParser_Include extends IncludeTokenParser
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
