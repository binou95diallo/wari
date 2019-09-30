<<<<<<< HEAD
<?php

$this->load('container1.php', $container);

$container->loadFromExtension('security', [
    'encoders' => [
        'JMS\FooBundle\Entity\User7' => [
            'algorithm' => 'bcrypt',
            'cost' => 15,
        ],
    ],
]);
=======
<?php

$this->load('container1.php', $container);

$container->loadFromExtension('security', [
    'encoders' => [
        'JMS\FooBundle\Entity\User7' => [
            'algorithm' => 'bcrypt',
            'cost' => 15,
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
