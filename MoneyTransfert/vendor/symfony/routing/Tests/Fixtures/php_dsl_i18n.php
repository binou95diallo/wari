<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $routes
        ->collection()
        ->prefix(['en' => '/glish'])
        ->add('foo', '/foo')
        ->add('bar', ['en' => '/bar']);

    $routes
        ->add('baz', ['en' => '/baz']);

    $routes->import('php_dsl_sub_i18n.php')
        ->prefix(['fr' => '/ench']);
};
=======
<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
    $routes
        ->collection()
        ->prefix(['en' => '/glish'])
        ->add('foo', '/foo')
        ->add('bar', ['en' => '/bar']);

    $routes
        ->add('baz', ['en' => '/baz']);

    $routes->import('php_dsl_sub_i18n.php')
        ->prefix(['fr' => '/ench']);
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
