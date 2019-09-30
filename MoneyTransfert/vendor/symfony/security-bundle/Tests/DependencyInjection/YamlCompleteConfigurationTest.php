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

namespace Symfony\Bundle\SecurityBundle\Tests\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class YamlCompleteConfigurationTest extends CompleteConfigurationTest
{
    protected function getLoader(ContainerBuilder $container)
    {
        return new YamlFileLoader($container, new FileLocator(__DIR__.'/Fixtures/yml'));
    }

    protected function getFileExtension()
    {
        return 'yml';
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

namespace Symfony\Bundle\SecurityBundle\Tests\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class YamlCompleteConfigurationTest extends CompleteConfigurationTest
{
    protected function getLoader(ContainerBuilder $container)
    {
        return new YamlFileLoader($container, new FileLocator(__DIR__.'/Fixtures/yml'));
    }

    protected function getFileExtension()
    {
        return 'yml';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
