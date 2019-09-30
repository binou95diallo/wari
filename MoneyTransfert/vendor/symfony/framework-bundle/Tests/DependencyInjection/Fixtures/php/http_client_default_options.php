<<<<<<< HEAD
<?php

$container->loadFromExtension('framework', [
    'http_client' => [
        'max_host_connections' => 4,
        'default_options' => null,
        'scoped_clients' => [
            'foo' => [
                'base_uri' => 'http://example.com',
            ],
        ],
    ],
]);
=======
<?php

$container->loadFromExtension('framework', [
    'http_client' => [
        'max_host_connections' => 4,
        'default_options' => null,
        'scoped_clients' => [
            'foo' => [
                'base_uri' => 'http://example.com',
            ],
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
