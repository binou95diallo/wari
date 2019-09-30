<<<<<<< HEAD
<?php

use Twig\Extension\DebugExtension;

class_exists('Twig\Extension\DebugExtension');

@trigger_error(sprintf('Using the "Twig_Extension_Debug" class is deprecated since Twig version 2.7, use "Twig\Extension\DebugExtension" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Extension\DebugExtension" instead */
    class Twig_Extension_Debug extends DebugExtension
    {
    }
}
=======
<?php

use Twig\Extension\DebugExtension;

class_exists('Twig\Extension\DebugExtension');

@trigger_error(sprintf('Using the "Twig_Extension_Debug" class is deprecated since Twig version 2.7, use "Twig\Extension\DebugExtension" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Extension\DebugExtension" instead */
    class Twig_Extension_Debug extends DebugExtension
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
