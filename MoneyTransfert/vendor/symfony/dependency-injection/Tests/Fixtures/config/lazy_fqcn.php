<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return function (ContainerConfigurator $c) {
    $di = $c->services();
    $di->set('foo', 'stdClass')->lazy('SomeInterface');
};
=======
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return function (ContainerConfigurator $c) {
    $di = $c->services();
    $di->set('foo', 'stdClass')->lazy('SomeInterface');
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
