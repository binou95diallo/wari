<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $collection = $routes->collection();

    $collection->add('bar_route', '/bar')
        ->defaults(['_controller' => 'AppBundle:Bar:view']);

    return $collection;
};
=======
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $collection = $routes->collection();

    $collection->add('bar_route', '/bar')
        ->defaults(['_controller' => 'AppBundle:Bar:view']);

    return $collection;
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
