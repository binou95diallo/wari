<<<<<<< HEAD
<?php

return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
    $o = [
        clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\VarExporter\\Tests\\MyPrivateValue'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\VarExporter\\Tests\\MyPrivateValue')),
        clone ($p['Symfony\\Component\\VarExporter\\Tests\\MyPrivateChildValue'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\VarExporter\\Tests\\MyPrivateChildValue')),
    ],
    null,
    [
        'Symfony\\Component\\VarExporter\\Tests\\MyPrivateValue' => [
            'prot' => [
                123,
                123,
            ],
            'priv' => [
                234,
                234,
            ],
        ],
    ],
    [
        $o[0],
        $o[1],
    ],
    []
);
=======
<?php

return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
    $o = [
        clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\VarExporter\\Tests\\MyPrivateValue'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\VarExporter\\Tests\\MyPrivateValue')),
        clone ($p['Symfony\\Component\\VarExporter\\Tests\\MyPrivateChildValue'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\VarExporter\\Tests\\MyPrivateChildValue')),
    ],
    null,
    [
        'Symfony\\Component\\VarExporter\\Tests\\MyPrivateValue' => [
            'prot' => [
                123,
                123,
            ],
            'priv' => [
                234,
                234,
            ],
        ],
    ],
    [
        $o[0],
        $o[1],
    ],
    []
);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
