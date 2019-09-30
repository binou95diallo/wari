<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return function (ContainerConfigurator $c) {
    $c->services()
        ->set('parent_service', \stdClass::class)
        ->set('child_service')->parent('parent_service')->autoconfigure(true);
};
=======
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return function (ContainerConfigurator $c) {
    $c->services()
        ->set('parent_service', \stdClass::class)
        ->set('child_service')->parent('parent_service')->autoconfigure(true);
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
