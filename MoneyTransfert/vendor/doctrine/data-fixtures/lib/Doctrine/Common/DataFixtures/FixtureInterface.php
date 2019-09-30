<<<<<<< HEAD
<?php

namespace Doctrine\Common\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Interface contract for fixture classes to implement.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
interface FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager);
}
=======
<?php

namespace Doctrine\Common\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Interface contract for fixture classes to implement.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
interface FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
