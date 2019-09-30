<<<<<<< HEAD
<?php

$container->loadFromExtension('security', [
    'access_decision_manager' => [
        'allow_if_all_abstain' => true,
        'allow_if_equal_granted_denied' => false,
    ],
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
    ],
]);
=======
<?php

$container->loadFromExtension('security', [
    'access_decision_manager' => [
        'allow_if_all_abstain' => true,
        'allow_if_equal_granted_denied' => false,
    ],
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
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
