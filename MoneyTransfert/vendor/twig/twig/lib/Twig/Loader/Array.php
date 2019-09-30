<<<<<<< HEAD
<?php

use Twig\Loader\ArrayLoader;

class_exists('Twig\Loader\ArrayLoader');

@trigger_error(sprintf('Using the "Twig_Loader_Array" class is deprecated since Twig version 2.7, use "Twig\Loader\ArrayLoader" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Loader\ArrayLoader" instead */
    class Twig_Loader_Array extends ArrayLoader
    {
    }
}
=======
<?php

use Twig\Loader\ArrayLoader;

class_exists('Twig\Loader\ArrayLoader');

@trigger_error(sprintf('Using the "Twig_Loader_Array" class is deprecated since Twig version 2.7, use "Twig\Loader\ArrayLoader" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Loader\ArrayLoader" instead */
    class Twig_Loader_Array extends ArrayLoader
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
