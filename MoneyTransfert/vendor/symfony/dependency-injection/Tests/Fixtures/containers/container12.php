<<<<<<< HEAD
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;

$container = new ContainerBuilder();
$container->
    register('foo', 'FooClass\\Foo')->
    addArgument('foo<>&bar')->
    addTag('foo"bar\\bar', ['foo' => 'foo"barřž€'])
    ->setPublic(true)
;

return $container;
=======
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;

$container = new ContainerBuilder();
$container->
    register('foo', 'FooClass\\Foo')->
    addArgument('foo<>&bar')->
    addTag('foo"bar\\bar', ['foo' => 'foo"barřž€'])
    ->setPublic(true)
;

return $container;
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
