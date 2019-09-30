<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\BarService;

return new class() {
    public function __invoke(ContainerConfigurator $c)
    {
        $s = $c->services();
        $s->set(BarService::class)
            ->args([inline('FooClass')]);
    }
};
=======
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\BarService;

return new class() {
    public function __invoke(ContainerConfigurator $c)
    {
        $s = $c->services();
        $s->set(BarService::class)
            ->args([inline('FooClass')]);
    }
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
