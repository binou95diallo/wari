<<<<<<< HEAD
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;

$container = new ContainerBuilder();
$container
    ->register('foo', 'FooClass\\Foo')
    ->setDecoratedService('bar')
    ->setPublic(true)
;

return $container;
=======
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;

$container = new ContainerBuilder();
$container
    ->register('foo', 'FooClass\\Foo')
    ->setDecoratedService('bar')
    ->setPublic(true)
;

return $container;
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
