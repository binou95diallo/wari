<<<<<<< HEAD
<?php

$container->loadFromExtension('framework', [
    'templating' => [
        'cache' => '/path/to/cache',
        'engines' => ['php', 'twig'],
        'loader' => ['loader.foo', 'loader.bar'],
        'form' => [
            'resources' => ['theme1', 'theme2'],
        ],
        'hinclude_default_template' => 'global_hinclude_template',
    ],
    'assets' => null,
    'fragments' => [
        'enabled' => true,
        'hinclude_default_template' => 'global_hinclude_template',
    ],
]);
=======
<?php

$container->loadFromExtension('framework', [
    'templating' => [
        'cache' => '/path/to/cache',
        'engines' => ['php', 'twig'],
        'loader' => ['loader.foo', 'loader.bar'],
        'form' => [
            'resources' => ['theme1', 'theme2'],
        ],
        'hinclude_default_template' => 'global_hinclude_template',
    ],
    'assets' => null,
    'fragments' => [
        'enabled' => true,
        'hinclude_default_template' => 'global_hinclude_template',
    ],
]);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
