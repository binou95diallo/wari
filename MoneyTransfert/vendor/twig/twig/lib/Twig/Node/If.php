<<<<<<< HEAD
<?php

use Twig\Node\IfNode;

class_exists('Twig\Node\IfNode');

@trigger_error(sprintf('Using the "Twig_Node_If" class is deprecated since Twig version 2.7, use "Twig\Node\IfNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\IfNode" instead */
    class Twig_Node_If extends IfNode
    {
    }
}
=======
<?php

use Twig\Node\IfNode;

class_exists('Twig\Node\IfNode');

@trigger_error(sprintf('Using the "Twig_Node_If" class is deprecated since Twig version 2.7, use "Twig\Node\IfNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\IfNode" instead */
    class Twig_Node_If extends IfNode
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
