<<<<<<< HEAD
<?php

use Twig\Node\WithNode;

class_exists('Twig\Node\WithNode');

@trigger_error(sprintf('Using the "Twig_Node_With" class is deprecated since Twig version 2.7, use "Twig\Node\WithNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\WithNode" instead */
    class Twig_Node_With extends WithNode
    {
    }
}
=======
<?php

use Twig\Node\WithNode;

class_exists('Twig\Node\WithNode');

@trigger_error(sprintf('Using the "Twig_Node_With" class is deprecated since Twig version 2.7, use "Twig\Node\WithNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\WithNode" instead */
    class Twig_Node_With extends WithNode
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
