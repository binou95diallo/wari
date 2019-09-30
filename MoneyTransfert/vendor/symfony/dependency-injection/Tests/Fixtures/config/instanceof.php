<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\FooService;
use Symfony\Component\DependencyInjection\Tests\Fixtures\Prototype;

return function (ContainerConfigurator $c) {
    $s = $c->services();
    $s->instanceof(Prototype\Foo::class)
        ->property('p', 0)
        ->call('setFoo', [ref('foo')])
        ->tag('tag', ['k' => 'v'])
        ->share(false)
        ->lazy()
        ->configurator('c')
        ->property('p', 1);

    $s->load(Prototype::class.'\\', '../Prototype')->exclude('../Prototype/*/*');

    $s->set('foo', FooService::class);
};
=======
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\FooService;
use Symfony\Component\DependencyInjection\Tests\Fixtures\Prototype;

return function (ContainerConfigurator $c) {
    $s = $c->services();
    $s->instanceof(Prototype\Foo::class)
        ->property('p', 0)
        ->call('setFoo', [ref('foo')])
        ->tag('tag', ['k' => 'v'])
        ->share(false)
        ->lazy()
        ->configurator('c')
        ->property('p', 1);

    $s->load(Prototype::class.'\\', '../Prototype')->exclude('../Prototype/*/*');

    $s->set('foo', FooService::class);
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
