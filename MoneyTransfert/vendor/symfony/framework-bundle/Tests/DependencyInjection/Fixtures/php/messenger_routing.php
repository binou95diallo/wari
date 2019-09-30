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
