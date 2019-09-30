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
        'simple' => ['pattern' => '/login', 'security' => false],
        'secure' => [
            'stateless' => true,
            'http_basic' => true,
            'form_login' => true,
            'anonymous' => true,
            'switch_user' => true,
            'x509' => true,
            'remote_user' => true,
            'logout' => true,
            'remember_me' => ['secret' => 'TheSecret'],
            'user_checker' => null,
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
        'simple' => ['pattern' => '/login', 'security' => false],
        'secure' => [
            'stateless' => true,
            'http_basic' => true,
            'form_login' => true,
            'anonymous' => true,
            'switch_user' => true,
            'x509' => true,
            'remote_user' => true,
            'logout' => true,
            'remember_me' => ['secret' => 'TheSecret'],
            'user_checker' => null,
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
