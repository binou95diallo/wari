<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\Tests\Fixtures\Prototype\Foo;

return function (ContainerConfigurator $c) {
    $c->parameters()
        ('foo', 'Foo')
        ('bar', 'Bar')
    ;
    $c->services()
        (Foo::class)
            ->arg('$bar', ref('bar'))
            ->public()
        ('bar', Foo::class)
            ->call('setFoo')
    ;
};
=======
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\Tests\Fixtures\Prototype\Foo;

return function (ContainerConfigurator $c) {
    $c->parameters()
        ('foo', 'Foo')
        ('bar', 'Bar')
    ;
    $c->services()
        (Foo::class)
            ->arg('$bar', ref('bar'))
            ->public()
        ('bar', Foo::class)
            ->call('setFoo')
    ;
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
