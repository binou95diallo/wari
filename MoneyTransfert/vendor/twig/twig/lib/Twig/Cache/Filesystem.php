<<<<<<< HEAD
<?php

use Twig\Cache\FilesystemCache;

class_exists('Twig\Cache\FilesystemCache');

@trigger_error(sprintf('Using the "Twig_Cache_Filesystem" class is deprecated since Twig version 2.7, use "Twig\Cache\FilesystemCache" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Cache\FilesystemCache" instead */
    class Twig_Cache_Filesystem extends FilesystemCache
    {
    }
}
=======
<?php

use Twig\Cache\FilesystemCache;

class_exists('Twig\Cache\FilesystemCache');

@trigger_error(sprintf('Using the "Twig_Cache_Filesystem" class is deprecated since Twig version 2.7, use "Twig\Cache\FilesystemCache" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Cache\FilesystemCache" instead */
    class Twig_Cache_Filesystem extends FilesystemCache
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
