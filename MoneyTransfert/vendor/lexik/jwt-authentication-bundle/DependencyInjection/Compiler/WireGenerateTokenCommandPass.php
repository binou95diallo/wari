<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class WireGenerateTokenCommandPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('lexik_jwt_authentication.generate_token_command') || !$container->hasDefinition('security.context_listener')) {
            return;
        }

        $container
            ->getDefinition('lexik_jwt_authentication.generate_token_command')
            ->replaceArgument(1, $container->getDefinition('security.context_listener')->getArgument(1))
        ;
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class WireGenerateTokenCommandPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('lexik_jwt_authentication.generate_token_command') || !$container->hasDefinition('security.context_listener')) {
            return;
        }

        $container
            ->getDefinition('lexik_jwt_authentication.generate_token_command')
            ->replaceArgument(1, $container->getDefinition('security.context_listener')->getArgument(1))
        ;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
