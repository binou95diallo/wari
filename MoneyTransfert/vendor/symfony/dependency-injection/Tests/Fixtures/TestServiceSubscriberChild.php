<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

use Symfony\Contracts\Service\ServiceSubscriberTrait;

class TestServiceSubscriberChild extends TestServiceSubscriberParent
{
    use ServiceSubscriberTrait, TestServiceSubscriberTrait;

    private function testDefinition2(): TestDefinition2
    {
        return $this->container->get(__METHOD__);
    }

    private function invalidDefinition(): InvalidDefinition
    {
        return $this->container->get(__METHOD__);
    }

    private function privateFunction1(): string
    {
    }

    private function privateFunction2(): string
    {
    }
}
=======
<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

use Symfony\Contracts\Service\ServiceSubscriberTrait;

class TestServiceSubscriberChild extends TestServiceSubscriberParent
{
    use ServiceSubscriberTrait, TestServiceSubscriberTrait;

    private function testDefinition2(): TestDefinition2
    {
        return $this->container->get(__METHOD__);
    }

    private function invalidDefinition(): InvalidDefinition
    {
        return $this->container->get(__METHOD__);
    }

    private function privateFunction1(): string
    {
    }

    private function privateFunction2(): string
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
