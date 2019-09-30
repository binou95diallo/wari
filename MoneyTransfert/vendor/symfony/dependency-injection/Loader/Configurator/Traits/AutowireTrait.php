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

namespace Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

trait AutowireTrait
{
    /**
     * Enables/disables autowiring.
     *
     * @return $this
     */
    final public function autowire(bool $autowired = true)
    {
        $this->definition->setAutowired($autowired);

        return $this;
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

namespace Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

trait AutowireTrait
{
    /**
     * Enables/disables autowiring.
     *
     * @return $this
     */
    final public function autowire(bool $autowired = true)
    {
        $this->definition->setAutowired($autowired);

        return $this;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
