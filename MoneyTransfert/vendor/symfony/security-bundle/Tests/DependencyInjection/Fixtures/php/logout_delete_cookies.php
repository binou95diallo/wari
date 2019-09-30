<<<<<<< HEAD
<?php

$container->loadFromExtension('security', [
    'providers' => [
        'default' => ['id' => 'foo'],
    ],

    'firewalls' => [
        'main' => [
            'provider' => 'default',
            'form_login' => true,
            'logout' => [
                'delete_cookies' => [
                    'cookie1-name' => true,
                    'cookie2_name' => true,
                    'cookie3-long_name' => ['path' => '/'],
                ],
            ],
        ],
    ],
]);
=======
<?php

$container->loadFromExtension('security', [
    'providers' => [
        'default' => ['id' => 'foo'],
    ],

    'firewalls' => [
        'main' => [
            'provider' => 'default',
            'form_login' => true,
            'logout' => [
                'delete_cookies' => [
                    'cookie1-name' => true,
                    'cookie2_name' => true,
                    'cookie3-long_name' => ['path' => '/'],
                ],
            ],
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
