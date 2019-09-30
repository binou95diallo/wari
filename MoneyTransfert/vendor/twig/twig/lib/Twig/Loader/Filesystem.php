<<<<<<< HEAD
<?php

use Twig\Loader\FilesystemLoader;

class_exists('Twig\Loader\FilesystemLoader');

@trigger_error(sprintf('Using the "Twig_Loader_Filesystem" class is deprecated since Twig version 2.7, use "Twig\Loader\FilesystemLoader" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Loader\FilesystemLoader" instead */
    class Twig_Loader_Filesystem extends FilesystemLoader
    {
    }
}
=======
<?php

use Twig\Loader\FilesystemLoader;

class_exists('Twig\Loader\FilesystemLoader');

@trigger_error(sprintf('Using the "Twig_Loader_Filesystem" class is deprecated since Twig version 2.7, use "Twig\Loader\FilesystemLoader" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Loader\FilesystemLoader" instead */
    class Twig_Loader_Filesystem extends FilesystemLoader
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
