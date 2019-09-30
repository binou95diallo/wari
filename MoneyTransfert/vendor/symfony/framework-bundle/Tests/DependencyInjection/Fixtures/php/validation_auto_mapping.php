<<<<<<< HEAD
<?php

$container->loadFromExtension('framework', [
    'property_info' => ['enabled' => true],
    'validation' => [
        'auto_mapping' => [
            'App\\' => ['foo', 'bar'],
            'Symfony\\' => ['a', 'b'],
            'Foo\\',
        ],
    ],
]);
=======
<?php

$container->loadFromExtension('framework', [
    'property_info' => ['enabled' => true],
    'validation' => [
        'auto_mapping' => [
            'App\\' => ['foo', 'bar'],
            'Symfony\\' => ['a', 'b'],
            'Foo\\',
        ],
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
