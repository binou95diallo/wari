<<<<<<< HEAD
<?php

use Twig\Profiler\Profile;

class_exists('Twig\Profiler\Profile');

@trigger_error(sprintf('Using the "Twig_Profiler_Profile" class is deprecated since Twig version 2.7, use "Twig\Profiler\Profile" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Profiler\Profile" instead */
    class Twig_Profiler_Profile extends Profile
    {
    }
}
=======
<?php

use Twig\Profiler\Profile;

class_exists('Twig\Profiler\Profile');

@trigger_error(sprintf('Using the "Twig_Profiler_Profile" class is deprecated since Twig version 2.7, use "Twig\Profiler\Profile" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Profiler\Profile" instead */
    class Twig_Profiler_Profile extends Profile
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
