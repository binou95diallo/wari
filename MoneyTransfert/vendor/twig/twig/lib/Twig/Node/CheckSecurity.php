<<<<<<< HEAD
<?php

use Twig\Node\CheckSecurityNode;

class_exists('Twig\Node\CheckSecurityNode');

@trigger_error(sprintf('Using the "Twig_Node_CheckSecurity" class is deprecated since Twig version 2.7, use "Twig\Node\CheckSecurityNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\CheckSecurityNode" instead */
    class Twig_Node_CheckSecurity extends CheckSecurityNode
    {
    }
}
=======
<?php

use Twig\Node\CheckSecurityNode;

class_exists('Twig\Node\CheckSecurityNode');

@trigger_error(sprintf('Using the "Twig_Node_CheckSecurity" class is deprecated since Twig version 2.7, use "Twig\Node\CheckSecurityNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\CheckSecurityNode" instead */
    class Twig_Node_CheckSecurity extends CheckSecurityNode
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
