<<<<<<< HEAD
<?php

use Twig\Compiler;

class_exists('Twig\Compiler');

@trigger_error(sprintf('Using the "Twig_Compiler" class is deprecated since Twig version 2.7, use "Twig\Compiler" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Compiler" instead */
    class Twig_Compiler extends Compiler
    {
    }
}
=======
<?php

use Twig\Compiler;

class_exists('Twig\Compiler');

@trigger_error(sprintf('Using the "Twig_Compiler" class is deprecated since Twig version 2.7, use "Twig\Compiler" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Compiler" instead */
    class Twig_Compiler extends Compiler
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
