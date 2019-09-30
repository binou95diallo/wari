<<<<<<< HEAD
<?php

use Twig\Environment;

class_exists('Twig\Environment');

@trigger_error(sprintf('Using the "Twig_Environment" class is deprecated since Twig version 2.7, use "Twig\Environment" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Environment" instead */
    class Twig_Environment extends Environment
    {
    }
}
=======
<?php

use Twig\Environment;

class_exists('Twig\Environment');

@trigger_error(sprintf('Using the "Twig_Environment" class is deprecated since Twig version 2.7, use "Twig\Environment" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Environment" instead */
    class Twig_Environment extends Environment
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
