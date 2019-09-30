<<<<<<< HEAD
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

$container = new ContainerBuilder();
$container->
    register('foo', 'FooClass')->
    addArgument(new Definition('BarClass', [new Definition('BazClass')]))
    ->setPublic(true)
;

return $container;
=======
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

$container = new ContainerBuilder();
$container->
    register('foo', 'FooClass')->
    addArgument(new Definition('BarClass', [new Definition('BazClass')]))
    ->setPublic(true)
;

return $container;
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
