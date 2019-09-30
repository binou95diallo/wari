<<<<<<< HEAD
<?php

use Twig\TokenParser\BlockTokenParser;

class_exists('Twig\TokenParser\BlockTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_Block" class is deprecated since Twig version 2.7, use "Twig\TokenParser\BlockTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\BlockTokenParser" instead */
    class Twig_TokenParser_Block extends BlockTokenParser
    {
    }
}
=======
<?php

use Twig\TokenParser\BlockTokenParser;

class_exists('Twig\TokenParser\BlockTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_Block" class is deprecated since Twig version 2.7, use "Twig\TokenParser\BlockTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\BlockTokenParser" instead */
    class Twig_TokenParser_Block extends BlockTokenParser
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
