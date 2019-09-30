<<<<<<< HEAD
<?php

use Twig\TokenParser\MacroTokenParser;

class_exists('Twig\TokenParser\MacroTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_Macro" class is deprecated since Twig version 2.7, use "Twig\TokenParser\MacroTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\MacroTokenParser" instead */
    class Twig_TokenParser_Macro extends MacroTokenParser
    {
    }
}
=======
<?php

use Twig\TokenParser\MacroTokenParser;

class_exists('Twig\TokenParser\MacroTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_Macro" class is deprecated since Twig version 2.7, use "Twig\TokenParser\MacroTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\MacroTokenParser" instead */
    class Twig_TokenParser_Macro extends MacroTokenParser
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
