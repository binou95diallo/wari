<<<<<<< HEAD
<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\DependencyInjection\Factory\Resolver;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class FlysystemResolverFactory extends AbstractResolverFactory
{
    /**
     * {@inheritdoc}
     */
    public function create(ContainerBuilder $container, $resolverName, array $config)
    {
        $resolverDefinition = $this->getChildResolverDefinition();
        $resolverDefinition->replaceArgument(0, new Reference($config['filesystem_service']));
        $resolverDefinition->replaceArgument(2, $config['root_url']);
        $resolverDefinition->replaceArgument(3, $config['cache_prefix']);
        $resolverDefinition->replaceArgument(4, $config['visibility']);
        $resolverDefinition->addTag('liip_imagine.cache.resolver', [
            'resolver' => $resolverName,
        ]);

        $resolverId = 'liip_imagine.cache.resolver.'.$resolverName;
        $container->setDefinition($resolverId, $resolverDefinition);

        return $resolverId;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'flysystem';
    }

    /**
     * {@inheritdoc}
     */
    public function addConfiguration(ArrayNodeDefinition $builder)
    {
        $builder
            ->children()
                ->scalarNode('filesystem_service')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('cache_prefix')
                    ->defaultValue(null)
                ->end()
                ->scalarNode('root_url')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->enumNode('visibility')
                    ->values(['public', 'private'])
                    ->defaultValue('public')
                ->end()
            ->end();
    }
}
=======
<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\DependencyInjection\Factory\Resolver;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class FlysystemResolverFactory extends AbstractResolverFactory
{
    /**
     * {@inheritdoc}
     */
    public function create(ContainerBuilder $container, $resolverName, array $config)
    {
        $resolverDefinition = $this->getChildResolverDefinition();
        $resolverDefinition->replaceArgument(0, new Reference($config['filesystem_service']));
        $resolverDefinition->replaceArgument(2, $config['root_url']);
        $resolverDefinition->replaceArgument(3, $config['cache_prefix']);
        $resolverDefinition->replaceArgument(4, $config['visibility']);
        $resolverDefinition->addTag('liip_imagine.cache.resolver', [
            'resolver' => $resolverName,
        ]);

        $resolverId = 'liip_imagine.cache.resolver.'.$resolverName;
        $container->setDefinition($resolverId, $resolverDefinition);

        return $resolverId;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'flysystem';
    }

    /**
     * {@inheritdoc}
     */
    public function addConfiguration(ArrayNodeDefinition $builder)
    {
        $builder
            ->children()
                ->scalarNode('filesystem_service')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('cache_prefix')
                    ->defaultValue(null)
                ->end()
                ->scalarNode('root_url')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->enumNode('visibility')
                    ->values(['public', 'private'])
                    ->defaultValue('public')
                ->end()
            ->end();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
