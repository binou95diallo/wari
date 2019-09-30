<<<<<<< HEAD
<?php

$container->loadFromExtension('framework', [
    'messenger' => [
        'buses' => [
            'command_bus' => [
                'middleware' => [
                    [
                        'foo' => ['qux'],
                        'bar' => ['baz'],
                    ],
                ],
            ],
        ],
    ],
]);
=======
<?php

$container->loadFromExtension('framework', [
    'messenger' => [
        'buses' => [
            'command_bus' => [
                'middleware' => [
                    [
                        'foo' => ['qux'],
                        'bar' => ['baz'],
                    ],
                ],
            ],
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
