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

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\Alias;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AliasConfigurator extends AbstractServiceConfigurator
{
    const FACTORY = 'alias';

    use Traits\PublicTrait;

    public function __construct(ServicesConfigurator $parent, Alias $alias)
    {
        $this->parent = $parent;
        $this->definition = $alias;
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

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\Alias;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AliasConfigurator extends AbstractServiceConfigurator
{
    const FACTORY = 'alias';

    use Traits\PublicTrait;

    public function __construct(ServicesConfigurator $parent, Alias $alias)
    {
        $this->parent = $parent;
        $this->definition = $alias;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
