<<<<<<< HEAD
<?php

use Twig\Util\DeprecationCollector;

class_exists('Twig\Util\DeprecationCollector');

@trigger_error(sprintf('Using the "Twig_Util_DeprecationCollector" class is deprecated since Twig version 2.7, use "Twig\Util\DeprecationCollector" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Util\DeprecationCollector" instead */
    class Twig_Util_DeprecationCollector extends DeprecationCollector
    {
    }
}
=======
<?php

use Twig\Util\DeprecationCollector;

class_exists('Twig\Util\DeprecationCollector');

@trigger_error(sprintf('Using the "Twig_Util_DeprecationCollector" class is deprecated since Twig version 2.7, use "Twig\Util\DeprecationCollector" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Util\DeprecationCollector" instead */
    class Twig_Util_DeprecationCollector extends DeprecationCollector
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
