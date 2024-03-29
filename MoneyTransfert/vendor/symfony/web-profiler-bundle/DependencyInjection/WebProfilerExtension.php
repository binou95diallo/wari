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

namespace Symfony\Bundle\WebProfilerBundle\DependencyInjection;

use Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Argument\ServiceClosureArgument;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Kernel;

/**
 * WebProfilerExtension.
 *
 * Usage:
 *
 *     <webprofiler:config
 *        toolbar="true"
 *        intercept-redirects="true"
 *     />
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WebProfilerExtension extends Extension
{
    /**
     * Loads the web profiler configuration.
     *
     * @param array            $configs   An array of configuration settings
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('profiler.xml');

        if ($config['toolbar'] || $config['intercept_redirects']) {
            $loader->load('toolbar.xml');
            $container->getDefinition('web_profiler.debug_toolbar')->replaceArgument(4, $config['excluded_ajax_paths']);
            $container->setParameter('web_profiler.debug_toolbar.intercept_redirects', $config['intercept_redirects']);
            $container->setParameter('web_profiler.debug_toolbar.mode', $config['toolbar'] ? WebDebugToolbarListener::ENABLED : WebDebugToolbarListener::DISABLED);
        }

        if (Kernel::VERSION_ID >= 40008 || (Kernel::VERSION_ID >= 30408 && Kernel::VERSION_ID < 40000)) {
            $container->getDefinition('debug.file_link_formatter')
                ->replaceArgument(3, new ServiceClosureArgument(new Reference('debug.file_link_formatter.url_format')));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/../Resources/config/schema';
    }

    public function getNamespace()
    {
        return 'http://symfony.com/schema/dic/webprofiler';
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

namespace Symfony\Bundle\WebProfilerBundle\DependencyInjection;

use Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Argument\ServiceClosureArgument;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Kernel;

/**
 * WebProfilerExtension.
 *
 * Usage:
 *
 *     <webprofiler:config
 *        toolbar="true"
 *        intercept-redirects="true"
 *     />
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WebProfilerExtension extends Extension
{
    /**
     * Loads the web profiler configuration.
     *
     * @param array            $configs   An array of configuration settings
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('profiler.xml');

        if ($config['toolbar'] || $config['intercept_redirects']) {
            $loader->load('toolbar.xml');
            $container->getDefinition('web_profiler.debug_toolbar')->replaceArgument(4, $config['excluded_ajax_paths']);
            $container->setParameter('web_profiler.debug_toolbar.intercept_redirects', $config['intercept_redirects']);
            $container->setParameter('web_profiler.debug_toolbar.mode', $config['toolbar'] ? WebDebugToolbarListener::ENABLED : WebDebugToolbarListener::DISABLED);
        }

        if (Kernel::VERSION_ID >= 40008 || (Kernel::VERSION_ID >= 30408 && Kernel::VERSION_ID < 40000)) {
            $container->getDefinition('debug.file_link_formatter')
                ->replaceArgument(3, new ServiceClosureArgument(new Reference('debug.file_link_formatter.url_format')));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/../Resources/config/schema';
    }

    public function getNamespace()
    {
        return 'http://symfony.com/schema/dic/webprofiler';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
