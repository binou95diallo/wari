<<<<<<< HEAD
<?php

use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Controller\UserValueResolver;

$defaultFirewall = [
    'anonymous' => null,
];

if (method_exists(Security::class, 'getUser') && !class_exists(UserValueResolver::class)) {
    $defaultFirewall['logout_on_user_change'] = true;
}

$container->loadFromExtension('security', [
    'providers' => [
        'in_memory' => [
            'memory' => null,
        ],
    ],
    'firewalls' => [
        'default' => $defaultFirewall,
    ],
]);
=======
<?php

use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Controller\UserValueResolver;

$defaultFirewall = [
    'anonymous' => null,
];

if (method_exists(Security::class, 'getUser') && !class_exists(UserValueResolver::class)) {
    $defaultFirewall['logout_on_user_change'] = true;
}

$container->loadFromExtension('security', [
    'providers' => [
        'in_memory' => [
            'memory' => null,
        ],
    ],
    'firewalls' => [
        'default' => $defaultFirewall,
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
