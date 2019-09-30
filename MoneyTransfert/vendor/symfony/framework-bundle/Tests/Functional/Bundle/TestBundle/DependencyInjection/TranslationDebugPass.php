<<<<<<< HEAD
<?php

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Remove in Symfony 5.0 when the templates directory deprecation is gone.
 */
class TranslationDebugPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if ($container->hasDefinition('console.command.translation_debug')) {
            // skipping the /Resources/views path deprecation
            $container->getDefinition('console.command.translation_debug')
                ->setArgument(4, '%kernel.project_dir%/Resources/views');
        }
    }
}
=======
<?php

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Remove in Symfony 5.0 when the templates directory deprecation is gone.
 */
class TranslationDebugPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if ($container->hasDefinition('console.command.translation_debug')) {
            // skipping the /Resources/views path deprecation
            $container->getDefinition('console.command.translation_debug')
                ->setArgument(4, '%kernel.project_dir%/Resources/views');
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
