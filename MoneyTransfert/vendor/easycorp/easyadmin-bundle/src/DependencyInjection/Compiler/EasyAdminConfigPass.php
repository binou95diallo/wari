<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Compiler\PriorityTaggedServiceTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author Konstantin Grachev <me@grachevko.ru>
 */
final class EasyAdminConfigPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $configPasses = $this->findAndSortTaggedServices('easyadmin.config_pass', $container);
        $definition = $container->getDefinition('easyadmin.config.manager');

        foreach ($configPasses as $service) {
            $definition->addMethodCall('addConfigPass', [$service]);
        }
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Compiler\PriorityTaggedServiceTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author Konstantin Grachev <me@grachevko.ru>
 */
final class EasyAdminConfigPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $configPasses = $this->findAndSortTaggedServices('easyadmin.config_pass', $container);
        $definition = $container->getDefinition('easyadmin.config.manager');

        foreach ($configPasses as $service) {
            $definition->addMethodCall('addConfigPass', [$service]);
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
