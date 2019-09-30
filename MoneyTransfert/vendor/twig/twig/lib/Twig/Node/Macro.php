<<<<<<< HEAD
<?php

use Twig\Node\MacroNode;

class_exists('Twig\Node\MacroNode');

@trigger_error(sprintf('Using the "Twig_Node_Macro" class is deprecated since Twig version 2.7, use "Twig\Node\MacroNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\MacroNode" instead */
    class Twig_Node_Macro extends MacroNode
    {
    }
}
=======
<?php

use Twig\Node\MacroNode;

class_exists('Twig\Node\MacroNode');

@trigger_error(sprintf('Using the "Twig_Node_Macro" class is deprecated since Twig version 2.7, use "Twig\Node\MacroNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\MacroNode" instead */
    class Twig_Node_Macro extends MacroNode
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
