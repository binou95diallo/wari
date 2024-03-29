<<<<<<< HEAD
<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

abstract class AbstractCompilerPass implements CompilerPassInterface
{
    /**
     * @param ContainerBuilder $container
     * @param string           $message
     * @param mixed[]          ...$replacements
     */
    protected function log(ContainerBuilder $container, string $message, ...$replacements): void
    {
        $container->log($this, sprintf(
            '[liip/imagine-bundle] %s', empty($replacements) ? $message : vsprintf($message, $replacements)
        ));
    }
}
=======
<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

abstract class AbstractCompilerPass implements CompilerPassInterface
{
    /**
     * @param ContainerBuilder $container
     * @param string           $message
     * @param mixed[]          ...$replacements
     */
    protected function log(ContainerBuilder $container, string $message, ...$replacements): void
    {
        $container->log($this, sprintf(
            '[liip/imagine-bundle] %s', empty($replacements) ? $message : vsprintf($message, $replacements)
        ));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
