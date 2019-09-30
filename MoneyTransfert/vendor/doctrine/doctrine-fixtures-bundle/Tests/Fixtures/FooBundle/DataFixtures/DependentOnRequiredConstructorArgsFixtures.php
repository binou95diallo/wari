<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle\Tests\Fixtures\FooBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DependentOnRequiredConstructorArgsFixtures implements ORMFixtureInterface, DependentFixtureInterface
{
    public function load(ObjectManager $manager) : void
    {
        // ...
    }

    public function getDependencies() : array
    {
        return [RequiredConstructorArgsFixtures::class];
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle\Tests\Fixtures\FooBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DependentOnRequiredConstructorArgsFixtures implements ORMFixtureInterface, DependentFixtureInterface
{
    public function load(ObjectManager $manager) : void
    {
        // ...
    }

    public function getDependencies() : array
    {
        return [RequiredConstructorArgsFixtures::class];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
