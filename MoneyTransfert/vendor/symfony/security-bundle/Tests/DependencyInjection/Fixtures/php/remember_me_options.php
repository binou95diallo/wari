<<<<<<< HEAD
<?php

$container->loadFromExtension('security', [
    'providers' => [
        'default' => ['id' => 'foo'],
    ],

    'firewalls' => [
        'main' => [
            'form_login' => true,
            'remember_me' => [
                'secret' => 'TheSecret',
                'catch_exceptions' => false,
                'token_provider' => 'token_provider_id',
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
            'form_login' => true,
            'remember_me' => [
                'secret' => 'TheSecret',
                'catch_exceptions' => false,
                'token_provider' => 'token_provider_id',
            ],
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
