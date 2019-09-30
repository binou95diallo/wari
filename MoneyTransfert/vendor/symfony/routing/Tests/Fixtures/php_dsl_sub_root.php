<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $add = $routes->collection('r_');

    $add('root', '/');
    $add('bar', '/bar/');
};
=======
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $add = $routes->collection('r_');

    $add('root', '/');
    $add('bar', '/bar/');
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
