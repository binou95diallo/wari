<<<<<<< HEAD
<?php

$this->load('container1.php', $container);

$container->loadFromExtension('security', [
    'encoders' => [
        'JMS\FooBundle\Entity\User7' => [
            'algorithm' => 'argon2i',
            'memory_cost' => 256,
            'time_cost' => 1,
            'threads' => 2,
        ],
    ],
]);
=======
<?php

$this->load('container1.php', $container);

$container->loadFromExtension('security', [
    'encoders' => [
        'JMS\FooBundle\Entity\User7' => [
            'algorithm' => 'argon2i',
            'memory_cost' => 256,
            'time_cost' => 1,
            'threads' => 2,
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
