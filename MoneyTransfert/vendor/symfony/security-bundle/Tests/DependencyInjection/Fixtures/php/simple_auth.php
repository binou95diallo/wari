<<<<<<< HEAD
<?php

$container->loadFromExtension('security', [
    'providers' => [
        'default' => [
            'memory' => [
                'users' => [
                    'foo' => ['password' => 'foo', 'roles' => 'ROLE_USER'],
                ],
            ],
        ],
    ],

    'firewalls' => [
        'simple_auth' => [
            'provider' => 'default',
            'anonymous' => true,
            'simple_form' => ['authenticator' => 'simple_authenticator'],
        ],
    ],
]);
=======
<?php

$container->loadFromExtension('security', [
    'providers' => [
        'default' => [
            'memory' => [
                'users' => [
                    'foo' => ['password' => 'foo', 'roles' => 'ROLE_USER'],
                ],
            ],
        ],
    ],

    'firewalls' => [
        'simple_auth' => [
            'provider' => 'default',
            'anonymous' => true,
            'simple_form' => ['authenticator' => 'simple_authenticator'],
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
