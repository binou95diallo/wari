<<<<<<< HEAD
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

$container = new ContainerBuilder();

$bar = new Definition('Bar');
$bar->setConfigurator([new Definition('Baz'), 'configureBar']);

$fooFactory = new Definition('FooFactory');
$fooFactory->setFactory([new Definition('Foobar'), 'createFooFactory']);

$container
    ->register('foo', 'Foo')
    ->setFactory([$fooFactory, 'createFoo'])
    ->setConfigurator([$bar, 'configureFoo'])
    ->setPublic(true)
;

return $container;
=======
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

$container = new ContainerBuilder();

$bar = new Definition('Bar');
$bar->setConfigurator([new Definition('Baz'), 'configureBar']);

$fooFactory = new Definition('FooFactory');
$fooFactory->setFactory([new Definition('Foobar'), 'createFooFactory']);

$container
    ->register('foo', 'Foo')
    ->setFactory([$fooFactory, 'createFoo'])
    ->setConfigurator([$bar, 'configureFoo'])
    ->setPublic(true)
;

return $container;
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
