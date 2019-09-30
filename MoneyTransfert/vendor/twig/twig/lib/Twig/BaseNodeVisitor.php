<<<<<<< HEAD
<?php

use Twig\NodeVisitor\AbstractNodeVisitor;

class_exists('Twig\NodeVisitor\AbstractNodeVisitor');

@trigger_error(sprintf('Using the "Twig_BaseNodeVisitor" class is deprecated since Twig version 2.7, use "Twig\NodeVisitor\AbstractNodeVisitor" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\NodeVisitor\AbstractNodeVisitor" instead */
    class Twig_BaseNodeVisitor extends AbstractNodeVisitor
    {
    }
}
=======
<?php

use Twig\NodeVisitor\AbstractNodeVisitor;

class_exists('Twig\NodeVisitor\AbstractNodeVisitor');

@trigger_error(sprintf('Using the "Twig_BaseNodeVisitor" class is deprecated since Twig version 2.7, use "Twig\NodeVisitor\AbstractNodeVisitor" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\NodeVisitor\AbstractNodeVisitor" instead */
    class Twig_BaseNodeVisitor extends AbstractNodeVisitor
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
