<<<<<<< HEAD
<?php

use Twig\Loader\LoaderInterface;

class_exists('Twig\Loader\LoaderInterface');

@trigger_error(sprintf('Using the "Twig_LoaderInterface" class is deprecated since Twig version 2.7, use "Twig\Loader\LoaderInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Loader\LoaderInterface" instead */
    class Twig_LoaderInterface extends LoaderInterface
    {
    }
}
=======
<?php

use Twig\Loader\LoaderInterface;

class_exists('Twig\Loader\LoaderInterface');

@trigger_error(sprintf('Using the "Twig_LoaderInterface" class is deprecated since Twig version 2.7, use "Twig\Loader\LoaderInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Loader\LoaderInterface" instead */
    class Twig_LoaderInterface extends LoaderInterface
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
