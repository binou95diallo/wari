<<<<<<< HEAD
<?php

$container->loadFromExtension('framework', [
    'serializer' => true,
    'messenger' => [
        'serializer' => [
            'default_serializer' => 'messenger.transport.symfony_serializer',
        ],
        'routing' => [
            'Symfony\Component\Messenger\Tests\Fixtures\DummyMessage' => ['amqp', 'audit'],
            'Symfony\Component\Messenger\Tests\Fixtures\SecondMessage' => [
                'senders' => ['amqp', 'audit'],
            ],
            '*' => 'amqp',
        ],
        'transports' => [
            'amqp' => 'amqp://localhost/%2f/messages',
        ],
    ],
]);
=======
<?php

$container->loadFromExtension('framework', [
    'serializer' => true,
    'messenger' => [
        'serializer' => [
            'default_serializer' => 'messenger.transport.symfony_serializer',
        ],
        'routing' => [
            'Symfony\Component\Messenger\Tests\Fixtures\DummyMessage' => ['amqp', 'audit'],
            'Symfony\Component\Messenger\Tests\Fixtures\SecondMessage' => [
                'senders' => ['amqp', 'audit'],
            ],
            '*' => 'amqp',
        ],
        'transports' => [
            'amqp' => 'amqp://localhost/%2f/messages',
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
