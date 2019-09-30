<<<<<<< HEAD
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$container = new ContainerBuilder();
$container->
    register('foo', 'FooClass')->
    addArgument(new Reference('bar'))
    ->setPublic(true)
;
$container->
    register('bar', 'BarClass')
    ->setPublic(true)
;
$container->compile();

return $container;
=======
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$container = new ContainerBuilder();
$container->
    register('foo', 'FooClass')->
    addArgument(new Reference('bar'))
    ->setPublic(true)
;
$container->
    register('bar', 'BarClass')
    ->setPublic(true)
;
$container->compile();

return $container;
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
