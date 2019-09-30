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

namespace Doctrine\Bundle\DoctrineCacheBundle\DependencyInjection\Definition;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

/**
 * FileSystem definition.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class FileSystemDefinition extends CacheDefinition
{
    /**
     * {@inheritDoc}
     */
    public function configure($name, array $config, Definition $service, ContainerBuilder $container)
    {
        $service->setArguments(array(
            $config['file_system']['directory'],
            $config['file_system']['extension'],
            $config['file_system']['umask']
        ));
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

namespace Doctrine\Bundle\DoctrineCacheBundle\DependencyInjection\Definition;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

/**
 * FileSystem definition.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class FileSystemDefinition extends CacheDefinition
{
    /**
     * {@inheritDoc}
     */
    public function configure($name, array $config, Definition $service, ContainerBuilder $container)
    {
        $service->setArguments(array(
            $config['file_system']['directory'],
            $config['file_system']['extension'],
            $config['file_system']['umask']
        ));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
