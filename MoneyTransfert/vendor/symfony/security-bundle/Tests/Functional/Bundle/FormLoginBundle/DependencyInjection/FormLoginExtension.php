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

namespace Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\FormLoginBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Reference;

class FormLoginExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $container
            ->register('localized_form_failure_handler', 'Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\FormLoginBundle\Security\LocalizedFormFailureHandler')
            ->addArgument(new Reference('router'))
        ;
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

namespace Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\FormLoginBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Reference;

class FormLoginExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $container
            ->register('localized_form_failure_handler', 'Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\FormLoginBundle\Security\LocalizedFormFailureHandler')
            ->addArgument(new Reference('router'))
        ;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
