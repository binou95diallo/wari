<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\Tests\Fixtures\Prototype\Foo;

return function (ContainerConfigurator $c) {
    $c->import('basic.php');

    $s = $c->services()->defaults()
        ->public()
        ->private()
        ->autoconfigure()
        ->autowire()
        ->tag('t', ['a' => 'b'])
        ->bind(Foo::class, ref('bar'))
        ->private();

    $s->set(Foo::class)->args([ref('bar')])->public();
    $s->set('bar', Foo::class)->call('setFoo')->autoconfigure(false);
};
=======
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\Tests\Fixtures\Prototype\Foo;

return function (ContainerConfigurator $c) {
    $c->import('basic.php');

    $s = $c->services()->defaults()
        ->public()
        ->private()
        ->autoconfigure()
        ->autowire()
        ->tag('t', ['a' => 'b'])
        ->bind(Foo::class, ref('bar'))
        ->private();

    $s->set(Foo::class)->args([ref('bar')])->public();
    $s->set('bar', Foo::class)->call('setFoo')->autoconfigure(false);
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
