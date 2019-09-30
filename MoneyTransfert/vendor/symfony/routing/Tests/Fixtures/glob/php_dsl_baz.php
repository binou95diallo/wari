<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $collection = $routes->collection();

    $collection->add('baz_route', '/baz')
        ->defaults(['_controller' => 'AppBundle:Baz:view']);

    return $collection;
};
=======
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $collection = $routes->collection();

    $collection->add('baz_route', '/baz')
        ->defaults(['_controller' => 'AppBundle:Baz:view']);

    return $collection;
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
