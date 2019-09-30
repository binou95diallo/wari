<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle\Doctrine;

use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Doctrine\ORM\Mapping\Column;
use Symfony\Bundle\MakerBundle\DependencyBuilder;

/**
 * @internal
 */
final class ORMDependencyBuilder
{
    /**
     * Central method to add dependencies needed for Doctrine ORM.
     *
     * @param DependencyBuilder $dependencies
     */
    public static function buildDependencies(DependencyBuilder $dependencies)
    {
        $classes = [
            // guarantee DoctrineBundle
            DoctrineBundle::class,
            // guarantee ORM
            Column::class,
        ];

        foreach ($classes as $class) {
            $dependencies->addClassDependency(
                $class,
                'orm'
            );
        }
    }
}
=======
<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle\Doctrine;

use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Doctrine\ORM\Mapping\Column;
use Symfony\Bundle\MakerBundle\DependencyBuilder;

/**
 * @internal
 */
final class ORMDependencyBuilder
{
    /**
     * Central method to add dependencies needed for Doctrine ORM.
     *
     * @param DependencyBuilder $dependencies
     */
    public static function buildDependencies(DependencyBuilder $dependencies)
    {
        $classes = [
            // guarantee DoctrineBundle
            DoctrineBundle::class,
            // guarantee ORM
            Column::class,
        ];

        foreach ($classes as $class) {
            $dependencies->addClassDependency(
                $class,
                'orm'
            );
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
