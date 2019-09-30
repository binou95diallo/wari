<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return function (ContainerConfigurator $c) {
    $c->services()
        ->set('service', \stdClass::class)
        ->factory('factory:method');
};
=======
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return function (ContainerConfigurator $c) {
    $c->services()
        ->set('service', \stdClass::class)
        ->factory('factory:method');
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
