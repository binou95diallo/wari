<<<<<<< HEAD
<?php

$container->loadFromExtension('framework', [
    'assets' => [
        'version' => 'SomeVersionScheme',
        'base_urls' => 'http://cdn.example.com',
        'version_format' => '%%s?version=%%s',
        'packages' => [
            'images_path' => [
                'base_path' => '/foo',
            ],
            'images' => [
                'version' => '1.0.0',
                'base_urls' => ['http://images1.example.com', 'http://images2.example.com'],
            ],
            'foo' => [
                'version' => '1.0.0',
                'version_format' => '%%s-%%s',
            ],
            'bar' => [
                'base_urls' => ['https://bar2.example.com'],
            ],
            'bar_version_strategy' => [
                'base_urls' => ['https://bar2.example.com'],
                'version_strategy' => 'assets.custom_version_strategy',
            ],
            'json_manifest_strategy' => [
                'json_manifest_path' => '/path/to/manifest.json',
            ],
        ],
    ],
]);
=======
<?php

$container->loadFromExtension('framework', [
    'assets' => [
        'version' => 'SomeVersionScheme',
        'base_urls' => 'http://cdn.example.com',
        'version_format' => '%%s?version=%%s',
        'packages' => [
            'images_path' => [
                'base_path' => '/foo',
            ],
            'images' => [
                'version' => '1.0.0',
                'base_urls' => ['http://images1.example.com', 'http://images2.example.com'],
            ],
            'foo' => [
                'version' => '1.0.0',
                'version_format' => '%%s-%%s',
            ],
            'bar' => [
                'base_urls' => ['https://bar2.example.com'],
            ],
            'bar_version_strategy' => [
                'base_urls' => ['https://bar2.example.com'],
                'version_strategy' => 'assets.custom_version_strategy',
            ],
            'json_manifest_strategy' => [
                'json_manifest_path' => '/path/to/manifest.json',
            ],
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
