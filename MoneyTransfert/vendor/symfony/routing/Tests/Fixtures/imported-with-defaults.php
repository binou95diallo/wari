<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $routes
        ->add('one', '/one')
        ->add('two', '/two')->defaults(['specific' => 'imported'])
    ;
};
=======
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $routes
        ->add('one', '/one')
        ->add('two', '/two')->defaults(['specific' => 'imported'])
    ;
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
