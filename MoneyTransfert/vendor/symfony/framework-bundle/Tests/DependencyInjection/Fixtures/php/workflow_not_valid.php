<<<<<<< HEAD
<?php

use Symfony\Bundle\FrameworkBundle\Tests\DependencyInjection\FrameworkExtensionTest;

$container->loadFromExtension('framework', [
    'workflows' => [
        'my_workflow' => [
            'type' => 'state_machine',
            'supports' => [
                FrameworkExtensionTest::class,
            ],
            'places' => [
                'first',
                'middle',
                'last',
            ],
            'transitions' => [
                'go' => [
                    'from' => [
                        'first',
                    ],
                    'to' => [
                        'middle',
                        'last',
                    ],
                ],
            ],
        ],
    ],
]);
=======
<?php

use Symfony\Bundle\FrameworkBundle\Tests\DependencyInjection\FrameworkExtensionTest;

$container->loadFromExtension('framework', [
    'workflows' => [
        'my_workflow' => [
            'type' => 'state_machine',
            'supports' => [
                FrameworkExtensionTest::class,
            ],
            'places' => [
                'first',
                'middle',
                'last',
            ],
            'transitions' => [
                'go' => [
                    'from' => [
                        'first',
                    ],
                    'to' => [
                        'middle',
                        'last',
                    ],
                ],
            ],
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
