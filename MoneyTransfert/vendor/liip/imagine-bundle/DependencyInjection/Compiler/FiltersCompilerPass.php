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

class FiltersCompilerPass extends AbstractCompilerPass
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $tags = $container->findTaggedServiceIds('liip_imagine.filter.loader');

        if (count($tags) > 0 && $container->hasDefinition('liip_imagine.filter.manager')) {
            $manager = $container->getDefinition('liip_imagine.filter.manager');

            foreach ($tags as $id => $tag) {
                $manager->addMethodCall('addLoader', [$tag[0]['loader'], new Reference($id)]);
                $this->log($container, 'Registered filter loader: %s', $id);
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

class FiltersCompilerPass extends AbstractCompilerPass
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $tags = $container->findTaggedServiceIds('liip_imagine.filter.loader');

        if (count($tags) > 0 && $container->hasDefinition('liip_imagine.filter.manager')) {
            $manager = $container->getDefinition('liip_imagine.filter.manager');

            foreach ($tags as $id => $tag) {
                $manager->addMethodCall('addLoader', [$tag[0]['loader'], new Reference($id)]);
                $this->log($container, 'Registered filter loader: %s', $id);
            }
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
