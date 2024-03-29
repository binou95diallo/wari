<<<<<<< HEAD
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class ProjectExtension implements ExtensionInterface
{
    public function load(array $configs, ContainerBuilder $configuration)
    {
        $configuration->setParameter('project.configs', $configs);
        $configs = array_filter($configs);

        if ($configs) {
            $config = array_merge(...$configs);
        } else {
            $config = [];
        }

        $configuration->register('project.service.bar', 'FooClass')->setPublic(true);
        $configuration->setParameter('project.parameter.bar', isset($config['foo']) ? $config['foo'] : 'foobar');

        $configuration->register('project.service.foo', 'FooClass')->setPublic(true);
        $configuration->setParameter('project.parameter.foo', isset($config['foo']) ? $config['foo'] : 'foobar');

        return $configuration;
    }

    public function getXsdValidationBasePath()
    {
        return false;
    }

    public function getNamespace()
    {
        return 'http://www.example.com/schema/project';
    }

    public function getAlias()
    {
        return 'project';
    }

    public function getConfiguration(array $config, ContainerBuilder $container)
    {
    }
}
=======
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class ProjectExtension implements ExtensionInterface
{
    public function load(array $configs, ContainerBuilder $configuration)
    {
        $configuration->setParameter('project.configs', $configs);
        $configs = array_filter($configs);

        if ($configs) {
            $config = array_merge(...$configs);
        } else {
            $config = [];
        }

        $configuration->register('project.service.bar', 'FooClass')->setPublic(true);
        $configuration->setParameter('project.parameter.bar', isset($config['foo']) ? $config['foo'] : 'foobar');

        $configuration->register('project.service.foo', 'FooClass')->setPublic(true);
        $configuration->setParameter('project.parameter.foo', isset($config['foo']) ? $config['foo'] : 'foobar');

        return $configuration;
    }

    public function getXsdValidationBasePath()
    {
        return false;
    }

    public function getNamespace()
    {
        return 'http://www.example.com/schema/project';
    }

    public function getAlias()
    {
        return 'project';
    }

    public function getConfiguration(array $config, ContainerBuilder $container)
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
