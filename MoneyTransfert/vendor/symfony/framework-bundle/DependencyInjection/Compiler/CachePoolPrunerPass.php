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

namespace Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Symfony\Component\Cache\DependencyInjection\CachePoolPrunerPass as BaseCachePoolPrunerPass;

@trigger_error(sprintf('The "%s" class is deprecated since Symfony 4.2, use "%s" instead.', CachePoolPrunerPass::class, BaseCachePoolPrunerPass::class), E_USER_DEPRECATED);

/**
 * @author Rob Frawley 2nd <rmf@src.run>
 *
 * @deprecated since Symfony 4.2, use Symfony\Component\Cache\DependencyInjection\CachePoolPrunerPass instead.
 */
class CachePoolPrunerPass extends BaseCachePoolPrunerPass
{
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

namespace Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Symfony\Component\Cache\DependencyInjection\CachePoolPrunerPass as BaseCachePoolPrunerPass;

@trigger_error(sprintf('The "%s" class is deprecated since Symfony 4.2, use "%s" instead.', CachePoolPrunerPass::class, BaseCachePoolPrunerPass::class), E_USER_DEPRECATED);

/**
 * @author Rob Frawley 2nd <rmf@src.run>
 *
 * @deprecated since Symfony 4.2, use Symfony\Component\Cache\DependencyInjection\CachePoolPrunerPass instead.
 */
class CachePoolPrunerPass extends BaseCachePoolPrunerPass
{
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
