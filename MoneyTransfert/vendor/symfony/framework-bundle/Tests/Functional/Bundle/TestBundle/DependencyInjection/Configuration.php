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

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    private $customConfig;

    public function __construct($customConfig = null)
    {
        $this->customConfig = $customConfig;
    }

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('test');

        if ($this->customConfig) {
            $this->customConfig->addConfiguration($treeBuilder->getRootNode());
        }

        return $treeBuilder;
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

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    private $customConfig;

    public function __construct($customConfig = null)
    {
        $this->customConfig = $customConfig;
    }

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('test');

        if ($this->customConfig) {
            $this->customConfig->addConfiguration($treeBuilder->getRootNode());
        }

        return $treeBuilder;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
