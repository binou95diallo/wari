<<<<<<< HEAD
<?php

$container->loadFromExtension('framework', [
    'workflows' => [
        'legacy' => [
            'type' => 'state_machine',
            'marking_store' => [
                'type' => 'single_state',
                'arguments' => [
                    'state',
                ],
            ],
            'supports' => [
                stdClass::class,
            ],
            'initial_place' => 'draft',
            'places' => [
                'draft',
                'published',
            ],
            'transitions' => [
                'publish' => [
                    'from' => 'draft',
                    'to' => 'published',
                ],
            ],
        ],
    ],
]);
=======
<?php

$container->loadFromExtension('framework', [
    'workflows' => [
        'legacy' => [
            'type' => 'state_machine',
            'marking_store' => [
                'type' => 'single_state',
                'arguments' => [
                    'state',
                ],
            ],
            'supports' => [
                stdClass::class,
            ],
            'initial_place' => 'draft',
            'places' => [
                'draft',
                'published',
            ],
            'transitions' => [
                'publish' => [
                    'from' => 'draft',
                    'to' => 'published',
                ],
            ],
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
