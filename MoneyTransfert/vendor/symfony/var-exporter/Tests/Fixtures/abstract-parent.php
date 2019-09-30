<<<<<<< HEAD
<?php

return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
    $o = [
        clone (\Symfony\Component\VarExporter\Internal\Registry::$prototypes['Symfony\\Component\\VarExporter\\Tests\\ConcreteClass'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\VarExporter\\Tests\\ConcreteClass')),
    ],
    null,
    [
        'Symfony\\Component\\VarExporter\\Tests\\AbstractClass' => [
            'foo' => [
                123,
            ],
            'bar' => [
                234,
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
        clone (\Symfony\Component\VarExporter\Internal\Registry::$prototypes['Symfony\\Component\\VarExporter\\Tests\\ConcreteClass'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\VarExporter\\Tests\\ConcreteClass')),
    ],
    null,
    [
        'Symfony\\Component\\VarExporter\\Tests\\AbstractClass' => [
            'foo' => [
                123,
            ],
            'bar' => [
                234,
            ],
        ],
    ],
    $o[0],
    []
);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
