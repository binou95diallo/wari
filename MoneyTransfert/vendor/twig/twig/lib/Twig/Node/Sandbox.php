<<<<<<< HEAD
<?php

use Twig\Node\SandboxNode;

class_exists('Twig\Node\SandboxNode');

@trigger_error(sprintf('Using the "Twig_Node_Sandbox" class is deprecated since Twig version 2.7, use "Twig\Node\SandboxNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\SandboxNode" instead */
    class Twig_Node_Sandbox extends SandboxNode
    {
    }
}
=======
<?php

use Twig\Node\SandboxNode;

class_exists('Twig\Node\SandboxNode');

@trigger_error(sprintf('Using the "Twig_Node_Sandbox" class is deprecated since Twig version 2.7, use "Twig\Node\SandboxNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\SandboxNode" instead */
    class Twig_Node_Sandbox extends SandboxNode
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
