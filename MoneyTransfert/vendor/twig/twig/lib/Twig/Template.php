<<<<<<< HEAD
<?php

use Twig\Template;

class_exists('Twig\Template');

@trigger_error(sprintf('Using the "Twig_Template" class is deprecated since Twig version 2.7, use "Twig\Template" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Template" instead */
    class Twig_Template extends Template
    {
    }
}
=======
<?php

use Twig\Template;

class_exists('Twig\Template');

@trigger_error(sprintf('Using the "Twig_Template" class is deprecated since Twig version 2.7, use "Twig\Template" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Template" instead */
    class Twig_Template extends Template
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
