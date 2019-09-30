<<<<<<< HEAD
<?php

namespace Symfony\Component\Translation\Tests\DependencyInjection\fixtures;

use Psr\Container\ContainerInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class ServiceSubscriber implements ServiceSubscriberInterface
{
    public function __construct(ContainerInterface $container)
    {
    }

    public static function getSubscribedServices()
    {
        return ['translator' => TranslatorInterface::class];
    }
}
=======
<?php

namespace Symfony\Component\Translation\Tests\DependencyInjection\fixtures;

use Psr\Container\ContainerInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class ServiceSubscriber implements ServiceSubscriberInterface
{
    public function __construct(ContainerInterface $container)
    {
    }

    public static function getSubscribedServices()
    {
        return ['translator' => TranslatorInterface::class];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
