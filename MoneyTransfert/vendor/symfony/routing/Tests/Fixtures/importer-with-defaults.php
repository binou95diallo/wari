<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $routes->import('imported-with-defaults.php')
        ->prefix('/defaults')
        ->locale('g_locale')
        ->format('g_format')
    ;
};
=======
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $routes->import('imported-with-defaults.php')
        ->prefix('/defaults')
        ->locale('g_locale')
        ->format('g_format')
    ;
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
