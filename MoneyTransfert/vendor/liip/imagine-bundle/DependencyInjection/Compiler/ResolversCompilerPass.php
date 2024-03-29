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

namespace Liip\ImagineBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ResolversCompilerPass extends AbstractCompilerPass
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $tags = $container->findTaggedServiceIds('liip_imagine.cache.resolver');

        if (count($tags) > 0 && $container->hasDefinition('liip_imagine.cache.manager')) {
            $manager = $container->getDefinition('liip_imagine.cache.manager');

            foreach ($tags as $id => $tag) {
                $manager->addMethodCall('addResolver', [$tag[0]['resolver'], new Reference($id)]);
                $this->log($container, 'Registered cache resolver: %s', $id);
            }
        }
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

namespace Liip\ImagineBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ResolversCompilerPass extends AbstractCompilerPass
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $tags = $container->findTaggedServiceIds('liip_imagine.cache.resolver');

        if (count($tags) > 0 && $container->hasDefinition('liip_imagine.cache.manager')) {
            $manager = $container->getDefinition('liip_imagine.cache.manager');

            foreach ($tags as $id => $tag) {
                $manager->addMethodCall('addResolver', [$tag[0]['resolver'], new Reference($id)]);
                $this->log($container, 'Registered cache resolver: %s', $id);
            }
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
