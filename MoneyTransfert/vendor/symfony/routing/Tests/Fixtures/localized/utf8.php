<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $routes
        ->add('some_route', '/')
        ->add('some_utf8_route', '/utf8')->utf8()
    ;
};
=======
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $routes
        ->add('some_route', '/')
        ->add('some_utf8_route', '/utf8')->utf8()
    ;
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
