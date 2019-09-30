<<<<<<< HEAD
<?php

use Twig\Node\TextNode;

class_exists('Twig\Node\TextNode');

@trigger_error(sprintf('Using the "Twig_Node_Text" class is deprecated since Twig version 2.7, use "Twig\Node\TextNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\TextNode" instead */
    class Twig_Node_Text extends TextNode
    {
    }
}
=======
<?php

use Twig\Node\TextNode;

class_exists('Twig\Node\TextNode');

@trigger_error(sprintf('Using the "Twig_Node_Text" class is deprecated since Twig version 2.7, use "Twig\Node\TextNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\TextNode" instead */
    class Twig_Node_Text extends TextNode
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
