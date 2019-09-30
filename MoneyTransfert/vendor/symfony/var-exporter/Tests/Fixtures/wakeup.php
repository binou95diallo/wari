<<<<<<< HEAD
<?php

return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
    $o = [
        clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\VarExporter\\Tests\\MyWakeup'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\VarExporter\\Tests\\MyWakeup')),
        clone $p['Symfony\\Component\\VarExporter\\Tests\\MyWakeup'],
    ],
    null,
    [
        'stdClass' => [
            'sub' => [
                $o[1],
                123,
            ],
            'baz' => [
                1 => 123,
            ],
        ],
    ],
    $o[0],
    [
        1 => 1,
        0,
    ]
);
=======
<?php

return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
    $o = [
        clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\VarExporter\\Tests\\MyWakeup'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\VarExporter\\Tests\\MyWakeup')),
        clone $p['Symfony\\Component\\VarExporter\\Tests\\MyWakeup'],
    ],
    null,
    [
        'stdClass' => [
            'sub' => [
                $o[1],
                123,
            ],
            'baz' => [
                1 => 123,
            ],
        ],
    ],
    $o[0],
    [
        1 => 1,
        0,
    ]
);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
