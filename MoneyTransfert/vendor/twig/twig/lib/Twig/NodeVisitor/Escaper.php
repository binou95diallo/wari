<<<<<<< HEAD
<?php

use Twig\NodeVisitor\EscaperNodeVisitor;

class_exists('Twig\NodeVisitor\EscaperNodeVisitor');

@trigger_error(sprintf('Using the "Twig_NodeVisitor_Escaper" class is deprecated since Twig version 2.7, use "Twig\NodeVisitor\EscaperNodeVisitor" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\NodeVisitor\EscaperNodeVisitor" instead */
    class Twig_NodeVisitor_Escaper extends EscaperNodeVisitor
    {
    }
}
=======
<?php

use Twig\NodeVisitor\EscaperNodeVisitor;

class_exists('Twig\NodeVisitor\EscaperNodeVisitor');

@trigger_error(sprintf('Using the "Twig_NodeVisitor_Escaper" class is deprecated since Twig version 2.7, use "Twig\NodeVisitor\EscaperNodeVisitor" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\NodeVisitor\EscaperNodeVisitor" instead */
    class Twig_NodeVisitor_Escaper extends EscaperNodeVisitor
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
