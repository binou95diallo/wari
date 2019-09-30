<<<<<<< HEAD
<?php

$container->loadFromExtension('security', [
    'providers' => [
        'default' => [
            'memory' => [
                'users' => ['foo' => ['password' => 'foo', 'roles' => 'ROLE_USER']],
            ],
        ],
    ],
    'firewalls' => [
        'main' => [
            'provider' => 'undefined',
            'form_login' => true,
        ],
    ],
]);
=======
<?php

$container->loadFromExtension('security', [
    'providers' => [
        'default' => [
            'memory' => [
                'users' => ['foo' => ['password' => 'foo', 'roles' => 'ROLE_USER']],
            ],
        ],
    ],
    'firewalls' => [
        'main' => [
            'provider' => 'undefined',
            'form_login' => true,
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
