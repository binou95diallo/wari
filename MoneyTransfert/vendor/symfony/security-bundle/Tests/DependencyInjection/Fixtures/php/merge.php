<<<<<<< HEAD
<?php

$this->load('merge_import.php', $container);

$container->loadFromExtension('security', [
    'providers' => [
        'default' => ['id' => 'foo'],
    ],

    'firewalls' => [
        'main' => [
            'form_login' => false,
            'http_basic' => null,
        ],
    ],

    'role_hierarchy' => [
        'FOO' => ['MOO'],
    ],
]);
=======
<?php

$this->load('merge_import.php', $container);

$container->loadFromExtension('security', [
    'providers' => [
        'default' => ['id' => 'foo'],
    ],

    'firewalls' => [
        'main' => [
            'form_login' => false,
            'http_basic' => null,
        ],
    ],

    'role_hierarchy' => [
        'FOO' => ['MOO'],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
