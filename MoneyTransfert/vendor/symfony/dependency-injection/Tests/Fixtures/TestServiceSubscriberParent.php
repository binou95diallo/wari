<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class TestServiceSubscriberParent implements ServiceSubscriberInterface
{
    use ServiceSubscriberTrait;

    private function testDefinition1(): TestDefinition1
    {
        return $this->container->get(__METHOD__);
    }
}
=======
<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class TestServiceSubscriberParent implements ServiceSubscriberInterface
{
    use ServiceSubscriberTrait;

    private function testDefinition1(): TestDefinition1
    {
        return $this->container->get(__METHOD__);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
