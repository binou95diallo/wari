<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\Config;

class CustomConfig
{
    public function addConfiguration($rootNode)
    {
        $rootNode
            ->children()
                ->scalarNode('custom')->end()
                ->arrayNode('array')
                    ->children()
                        ->scalarNode('child1')->end()
                        ->scalarNode('child2')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\Config;

class CustomConfig
{
    public function addConfiguration($rootNode)
    {
        $rootNode
            ->children()
                ->scalarNode('custom')->end()
                ->arrayNode('array')
                    ->children()
                        ->scalarNode('child1')->end()
                        ->scalarNode('child2')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
