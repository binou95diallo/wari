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

namespace Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider;

use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * UserProviderFactoryInterface is the interface for all user provider factories.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
interface UserProviderFactoryInterface
{
    public function create(ContainerBuilder $container, $id, $config);

    public function getKey();

    public function addConfiguration(NodeDefinition $builder);
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

namespace Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider;

use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * UserProviderFactoryInterface is the interface for all user provider factories.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
interface UserProviderFactoryInterface
{
    public function create(ContainerBuilder $container, $id, $config);

    public function getKey();

    public function addConfiguration(NodeDefinition $builder);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
