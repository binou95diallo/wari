<<<<<<< HEAD
<?php

$container->loadFromExtension('security', [
    'providers' => [
        'default' => [
            'memory' => $memory = [
                'users' => ['foo' => ['password' => 'foo', 'roles' => 'ROLE_USER']],
            ],
        ],
        'with-dash' => [
            'memory' => $memory,
        ],
    ],
    'firewalls' => [
        'main' => [
            'provider' => 'default',
            'form_login' => true,
        ],
        'other' => [
            'provider' => 'with-dash',
            'form_login' => true,
        ],
    ],
]);
=======
<?php

$container->loadFromExtension('security', [
    'providers' => [
        'default' => [
            'memory' => $memory = [
                'users' => ['foo' => ['password' => 'foo', 'roles' => 'ROLE_USER']],
            ],
        ],
        'with-dash' => [
            'memory' => $memory,
        ],
    ],
    'firewalls' => [
        'main' => [
            'provider' => 'default',
            'form_login' => true,
        ],
        'other' => [
            'provider' => 'with-dash',
            'form_login' => true,
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
