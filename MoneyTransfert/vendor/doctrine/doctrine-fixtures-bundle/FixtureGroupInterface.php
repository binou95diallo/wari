<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle;

/**
 * FixtureGroupInterface can to be implemented by fixtures that belong in groups
 */
interface FixtureGroupInterface
{
    /**
     * This method must return an array of groups
     * on which the implementing class belongs to
     *
     * @return string[]
     */
    public static function getGroups() : array;
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle;

/**
 * FixtureGroupInterface can to be implemented by fixtures that belong in groups
 */
interface FixtureGroupInterface
{
    /**
     * This method must return an array of groups
     * on which the implementing class belongs to
     *
     * @return string[]
     */
    public static function getGroups() : array;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
