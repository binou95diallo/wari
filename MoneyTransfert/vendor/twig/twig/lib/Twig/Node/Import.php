<<<<<<< HEAD
<?php

use Twig\Node\ImportNode;

class_exists('Twig\Node\ImportNode');

@trigger_error(sprintf('Using the "Twig_Node_Import" class is deprecated since Twig version 2.7, use "Twig\Node\ImportNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\ImportNode" instead */
    class Twig_Node_Import extends ImportNode
    {
    }
}
=======
<?php

use Twig\Node\ImportNode;

class_exists('Twig\Node\ImportNode');

@trigger_error(sprintf('Using the "Twig_Node_Import" class is deprecated since Twig version 2.7, use "Twig\Node\ImportNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\ImportNode" instead */
    class Twig_Node_Import extends ImportNode
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
