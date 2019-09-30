<<<<<<< HEAD
<?php

$container->loadFromExtension('framework', [
    'serializer' => true,
    'messenger' => [
        'serializer' => [
            'default_serializer' => 'messenger.transport.symfony_serializer',
        ],
        'transports' => [
            'default' => 'amqp://localhost/%2f/messages',
            'customised' => [
                'dsn' => 'amqp://localhost/%2f/messages?exchange_name=exchange_name',
                'options' => ['queue' => ['name' => 'Queue']],
                'serializer' => 'messenger.transport.native_php_serializer',
            ],
            'redis' => 'redis://127.0.0.1:6379/messages',
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
        'transports' => [
            'default' => 'amqp://localhost/%2f/messages',
            'customised' => [
                'dsn' => 'amqp://localhost/%2f/messages?exchange_name=exchange_name',
                'options' => ['queue' => ['name' => 'Queue']],
                'serializer' => 'messenger.transport.native_php_serializer',
            ],
            'redis' => 'redis://127.0.0.1:6379/messages',
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
