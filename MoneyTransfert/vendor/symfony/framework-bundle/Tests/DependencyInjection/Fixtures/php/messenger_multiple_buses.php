<<<<<<< HEAD
<?php

$container->loadFromExtension('framework', [
    'messenger' => [
        'default_bus' => 'messenger.bus.commands',
        'buses' => [
            'messenger.bus.commands' => null,
            'messenger.bus.events' => [
                'middleware' => [
                    ['with_factory' => ['foo', true, ['bar' => 'baz']]],
                ],
            ],
            'messenger.bus.queries' => [
                'default_middleware' => false,
                'middleware' => [
                    'send_message',
                    'handle_message',
                ],
            ],
        ],
    ],
]);
=======
<?php

$container->loadFromExtension('framework', [
    'messenger' => [
        'default_bus' => 'messenger.bus.commands',
        'buses' => [
            'messenger.bus.commands' => null,
            'messenger.bus.events' => [
                'middleware' => [
                    ['with_factory' => ['foo', true, ['bar' => 'baz']]],
                ],
            ],
            'messenger.bus.queries' => [
                'default_middleware' => false,
                'middleware' => [
                    'send_message',
                    'handle_message',
                ],
            ],
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
