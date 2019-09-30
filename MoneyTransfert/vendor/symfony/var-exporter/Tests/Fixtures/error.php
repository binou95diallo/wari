<<<<<<< HEAD
<?php

return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
    $o = [
        (\Symfony\Component\VarExporter\Internal\Registry::$factories['Error'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Error'))(),
    ],
    null,
    [
        'TypeError' => [
            'file' => [
                \dirname(__DIR__).\DIRECTORY_SEPARATOR.'VarExporterTest.php',
            ],
            'line' => [
                234,
            ],
        ],
        'Error' => [
            'trace' => [
                [
                    'file' => \dirname(__DIR__).\DIRECTORY_SEPARATOR.'VarExporterTest.php',
                    'line' => 123,
                ],
            ],
        ],
    ],
    $o[0],
    [
        1 => 0,
    ]
);
=======
<?php

return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
    $o = [
        (\Symfony\Component\VarExporter\Internal\Registry::$factories['Error'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Error'))(),
    ],
    null,
    [
        'TypeError' => [
            'file' => [
                \dirname(__DIR__).\DIRECTORY_SEPARATOR.'VarExporterTest.php',
            ],
            'line' => [
                234,
            ],
        ],
        'Error' => [
            'trace' => [
                [
                    'file' => \dirname(__DIR__).\DIRECTORY_SEPARATOR.'VarExporterTest.php',
                    'line' => 123,
                ],
            ],
        ],
    ],
    $o[0],
    [
        1 => 0,
    ]
);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
