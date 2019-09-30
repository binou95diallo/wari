<<<<<<< HEAD
<?php

namespace Symfony\Bundle\SecurityBundle\Tests\DependencyInjection\Fixtures\UserProvider;

use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider\UserProviderFactoryInterface;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DummyProvider implements UserProviderFactoryInterface
{
    public function create(ContainerBuilder $container, $id, $config)
    {
    }

    public function getKey()
    {
        return 'foo';
    }

    public function addConfiguration(NodeDefinition $node)
    {
    }
}
=======
<?php

namespace Symfony\Bundle\SecurityBundle\Tests\DependencyInjection\Fixtures\UserProvider;

use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider\UserProviderFactoryInterface;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DummyProvider implements UserProviderFactoryInterface
{
    public function create(ContainerBuilder $container, $id, $config)
    {
    }

    public function getKey()
    {
        return 'foo';
    }

    public function addConfiguration(NodeDefinition $node)
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
