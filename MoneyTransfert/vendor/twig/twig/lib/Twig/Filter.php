<<<<<<< HEAD
<?php

use Twig\TwigFilter;

class_exists('Twig\TwigFilter');

@trigger_error(sprintf('Using the "Twig_Filter" class is deprecated since Twig version 2.7, use "Twig\TwigFilter" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TwigFilter" instead */
    class Twig_Filter extends TwigFilter
    {
    }
}
=======
<?php

use Twig\TwigFilter;

class_exists('Twig\TwigFilter');

@trigger_error(sprintf('Using the "Twig_Filter" class is deprecated since Twig version 2.7, use "Twig\TwigFilter" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TwigFilter" instead */
    class Twig_Filter extends TwigFilter
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
