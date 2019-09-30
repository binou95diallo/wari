<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

trait TestServiceSubscriberTrait
{
    private function testDefinition3(): TestDefinition3
    {
        return $this->container->get(__CLASS__.'::'.__FUNCTION__);
    }
}
=======
<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

trait TestServiceSubscriberTrait
{
    private function testDefinition3(): TestDefinition3
    {
        return $this->container->get(__CLASS__.'::'.__FUNCTION__);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
