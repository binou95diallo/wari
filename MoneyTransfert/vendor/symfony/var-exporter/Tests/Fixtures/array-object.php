<<<<<<< HEAD
<?php

return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
    $o = [
        clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['ArrayObject'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('ArrayObject')),
        clone $p['ArrayObject'],
    ],
    null,
    [
        'ArrayObject' => [
            "\0" => [
                [
                    [
                        1,
                        $o[0],
                    ],
                    0,
                ],
            ],
        ],
        'stdClass' => [
            'foo' => [
                $o[1],
            ],
        ],
    ],
    $o[0],
    []
);
=======
<?php

return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
    $o = [
        clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['ArrayObject'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('ArrayObject')),
        clone $p['ArrayObject'],
    ],
    null,
    [
        'ArrayObject' => [
            "\0" => [
                [
                    [
                        1,
                        $o[0],
                    ],
                    0,
                ],
            ],
        ],
        'stdClass' => [
            'foo' => [
                $o[1],
            ],
        ],
    ],
    $o[0],
    []
);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
