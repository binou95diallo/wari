<<<<<<< HEAD
<?php

use Twig\Node\IncludeNode;

class_exists('Twig\Node\IncludeNode');

@trigger_error(sprintf('Using the "Twig_Node_Include" class is deprecated since Twig version 2.7, use "Twig\Node\IncludeNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\IncludeNode" instead */
    class Twig_Node_Include extends IncludeNode
    {
    }
}
=======
<?php

use Twig\Node\IncludeNode;

class_exists('Twig\Node\IncludeNode');

@trigger_error(sprintf('Using the "Twig_Node_Include" class is deprecated since Twig version 2.7, use "Twig\Node\IncludeNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\IncludeNode" instead */
    class Twig_Node_Include extends IncludeNode
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
