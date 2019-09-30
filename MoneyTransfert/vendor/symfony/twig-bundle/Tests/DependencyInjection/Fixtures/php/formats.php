<<<<<<< HEAD
<?php

$container->loadFromExtension('twig', [
    'date' => [
        'format' => 'Y-m-d',
        'interval_format' => '%d',
        'timezone' => 'Europe/Berlin',
    ],
    'number_format' => [
        'decimals' => 2,
        'decimal_point' => ',',
        'thousands_separator' => '.',
    ],
    'strict_variables' => false, // to be removed in 5.0 relying on default
]);
=======
<?php

$container->loadFromExtension('twig', [
    'date' => [
        'format' => 'Y-m-d',
        'interval_format' => '%d',
        'timezone' => 'Europe/Berlin',
    ],
    'number_format' => [
        'decimals' => 2,
        'decimal_point' => ',',
        'thousands_separator' => '.',
    ],
    'strict_variables' => false, // to be removed in 5.0 relying on default
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
