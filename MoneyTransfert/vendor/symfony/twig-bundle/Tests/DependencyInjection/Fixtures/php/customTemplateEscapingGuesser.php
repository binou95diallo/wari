<<<<<<< HEAD
<?php

$container->loadFromExtension('twig', [
    'autoescape_service' => 'my_project.some_bundle.template_escaping_guesser',
    'autoescape_service_method' => 'guess',
    'strict_variables' => false, // to be removed in 5.0 relying on default
]);
=======
<?php

$container->loadFromExtension('twig', [
    'autoescape_service' => 'my_project.some_bundle.template_escaping_guesser',
    'autoescape_service_method' => 'guess',
    'strict_variables' => false, // to be removed in 5.0 relying on default
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
