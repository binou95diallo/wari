<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

use Symfony\Contracts\Service\ServiceSubscriberInterface;

class TestServiceSubscriber implements ServiceSubscriberInterface
{
    public function __construct($container)
    {
    }

    public static function getSubscribedServices()
    {
        return [
            __CLASS__,
            '?'.CustomDefinition::class,
            'bar' => CustomDefinition::class,
            'baz' => '?'.CustomDefinition::class,
        ];
    }
}
=======
<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

use Symfony\Contracts\Service\ServiceSubscriberInterface;

class TestServiceSubscriber implements ServiceSubscriberInterface
{
    public function __construct($container)
    {
    }

    public static function getSubscribedServices()
    {
        return [
            __CLASS__,
            '?'.CustomDefinition::class,
            'bar' => CustomDefinition::class,
            'baz' => '?'.CustomDefinition::class,
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
