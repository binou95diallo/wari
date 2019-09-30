<<<<<<< HEAD
<?php

$container->setParameter('env(REDIS_URL)', 'redis://paas.com');

$container->loadFromExtension('framework', [
    'cache' => [
        'default_redis_provider' => '%env(REDIS_URL)%',
    ],
]);
=======
<?php

$container->setParameter('env(REDIS_URL)', 'redis://paas.com');

$container->loadFromExtension('framework', [
    'cache' => [
        'default_redis_provider' => '%env(REDIS_URL)%',
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
