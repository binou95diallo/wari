<<<<<<< HEAD
<?php

$this->load('container1.php', $container);

$container->loadFromExtension('security', [
    'encoders' => [
        'JMS\FooBundle\Entity\User7' => [
            'algorithm' => 'sodium',
            'time_cost' => 8,
            'memory_cost' => 128 * 1024,
        ],
    ],
]);
=======
<?php

$this->load('container1.php', $container);

$container->loadFromExtension('security', [
    'encoders' => [
        'JMS\FooBundle\Entity\User7' => [
            'algorithm' => 'sodium',
            'time_cost' => 8,
            'memory_cost' => 128 * 1024,
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
