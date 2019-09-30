<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle\Tests\Fixtures\FooBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class RequiredConstructorArgsFixtures implements ORMFixtureInterface
{
    public function __construct(string $fooRequiredArg)
    {
    }

    public function load(ObjectManager $manager) : void
    {
        // ...
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle\Tests\Fixtures\FooBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class RequiredConstructorArgsFixtures implements ORMFixtureInterface
{
    public function __construct(string $fooRequiredArg)
    {
    }

    public function load(ObjectManager $manager) : void
    {
        // ...
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
