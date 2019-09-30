<<<<<<< HEAD
<?php

use Twig\Test\IntegrationTestCase;

class_exists('Twig\Test\IntegrationTestCase');

@trigger_error(sprintf('Using the "Twig_Test_IntegrationTestCase" class is deprecated since Twig version 2.7, use "Twig\Test\IntegrationTestCase" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Test\IntegrationTestCase" instead */
    class Twig_Test_IntegrationTestCase extends IntegrationTestCase
    {
    }
}
=======
<?php

use Twig\Test\IntegrationTestCase;

class_exists('Twig\Test\IntegrationTestCase');

@trigger_error(sprintf('Using the "Twig_Test_IntegrationTestCase" class is deprecated since Twig version 2.7, use "Twig\Test\IntegrationTestCase" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Test\IntegrationTestCase" instead */
    class Twig_Test_IntegrationTestCase extends IntegrationTestCase
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
