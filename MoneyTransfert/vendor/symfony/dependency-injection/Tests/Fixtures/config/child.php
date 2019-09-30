<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\BarService;

return function (ContainerConfigurator $c) {
    $c->services()
        ->set('bar', 'Class1')
        ->set(BarService::class)
            ->abstract(true)
            ->lazy()
        ->set('foo')
            ->parent(BarService::class)
            ->decorate('bar', 'b', 1)
            ->args([ref('b')])
            ->class('Class2')
            ->file('file.php')
            ->parent('bar')
            ->parent(BarService::class)
    ;
};
=======
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\BarService;

return function (ContainerConfigurator $c) {
    $c->services()
        ->set('bar', 'Class1')
        ->set(BarService::class)
            ->abstract(true)
            ->lazy()
        ->set('foo')
            ->parent(BarService::class)
            ->decorate('bar', 'b', 1)
            ->args([ref('b')])
            ->class('Class2')
            ->file('file.php')
            ->parent('bar')
            ->parent(BarService::class)
    ;
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
