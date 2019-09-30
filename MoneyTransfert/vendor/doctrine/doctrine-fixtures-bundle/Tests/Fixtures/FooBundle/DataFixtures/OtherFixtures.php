<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle\Tests\Fixtures\FooBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class OtherFixtures implements ORMFixtureInterface, FixtureGroupInterface
{
    public function load(ObjectManager $manager) : void
    {
        // ...
    }

    public static function getGroups() : array
    {
        return ['staging', 'fulfilledDependencyGroup'];
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle\Tests\Fixtures\FooBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class OtherFixtures implements ORMFixtureInterface, FixtureGroupInterface
{
    public function load(ObjectManager $manager) : void
    {
        // ...
    }

    public static function getGroups() : array
    {
        return ['staging', 'fulfilledDependencyGroup'];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
