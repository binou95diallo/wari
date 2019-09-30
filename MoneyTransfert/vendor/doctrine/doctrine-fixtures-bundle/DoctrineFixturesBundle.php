<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle;

use Doctrine\Bundle\FixturesBundle\DependencyInjection\CompilerPass\FixturesCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Bundle.
 */
class DoctrineFixturesBundle extends Bundle
{
    // phpcs:ignore SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new FixturesCompilerPass());
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle;

use Doctrine\Bundle\FixturesBundle\DependencyInjection\CompilerPass\FixturesCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Bundle.
 */
class DoctrineFixturesBundle extends Bundle
{
    // phpcs:ignore SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new FixturesCompilerPass());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
