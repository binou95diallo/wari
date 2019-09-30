<<<<<<< HEAD
<?php

use Twig\NodeVisitor\NodeVisitorInterface;

class_exists('Twig\NodeVisitor\NodeVisitorInterface');

@trigger_error(sprintf('Using the "Twig_NodeVisitorInterface" class is deprecated since Twig version 2.7, use "Twig\NodeVisitor\NodeVisitorInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\NodeVisitor\NodeVisitorInterface" instead */
    class Twig_NodeVisitorInterface extends NodeVisitorInterface
    {
    }
}
=======
<?php

use Twig\NodeVisitor\NodeVisitorInterface;

class_exists('Twig\NodeVisitor\NodeVisitorInterface');

@trigger_error(sprintf('Using the "Twig_NodeVisitorInterface" class is deprecated since Twig version 2.7, use "Twig\NodeVisitor\NodeVisitorInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\NodeVisitor\NodeVisitorInterface" instead */
    class Twig_NodeVisitorInterface extends NodeVisitorInterface
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
