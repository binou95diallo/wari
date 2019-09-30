<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $add = $routes->collection('c_')
        ->prefix('pub');

    $add('foo', ['fr' => '/foo']);
    $add('bar', ['fr' => '/bar']);
};
=======
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $add = $routes->collection('c_')
        ->prefix('pub');

    $add('foo', ['fr' => '/foo']);
    $add('bar', ['fr' => '/bar']);
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
