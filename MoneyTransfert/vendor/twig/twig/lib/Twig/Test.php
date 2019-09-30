<<<<<<< HEAD
<?php

use Twig\TwigTest;

class_exists('Twig\TwigTest');

@trigger_error(sprintf('Using the "Twig_Test" class is deprecated since Twig version 2.7, use "Twig\TwigTest" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TwigTest" instead */
    class Twig_Test extends TwigTest
    {
    }
}
=======
<?php

use Twig\TwigTest;

class_exists('Twig\TwigTest');

@trigger_error(sprintf('Using the "Twig_Test" class is deprecated since Twig version 2.7, use "Twig\TwigTest" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TwigTest" instead */
    class Twig_Test extends TwigTest
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
