<<<<<<< HEAD
<?php

$container->loadFromExtension('security', [
    'firewalls' => [
        'main' => [
            'form_login' => [
                'login_path' => '/login',
            ],
        ],
    ],
    'role_hierarchy' => [
        'FOO' => 'BAR',
        'ADMIN' => 'USER',
    ],
]);
=======
<?php

$container->loadFromExtension('security', [
    'firewalls' => [
        'main' => [
            'form_login' => [
                'login_path' => '/login',
            ],
        ],
    ],
    'role_hierarchy' => [
        'FOO' => 'BAR',
        'ADMIN' => 'USER',
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
