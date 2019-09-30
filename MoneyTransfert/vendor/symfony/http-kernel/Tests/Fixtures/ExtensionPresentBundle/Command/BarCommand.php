<<<<<<< HEAD
<?php

namespace Symfony\Component\HttpKernel\Tests\Fixtures\ExtensionPresentBundle\Command;

use Symfony\Component\Console\Command\Command;

/**
 * This command has a required parameter on the constructor and will be ignored by the default Bundle implementation.
 *
 * @see Bundle::registerCommands()
 */
class BarCommand extends Command
{
    public function __construct($example, $name = 'bar')
    {
    }
}
=======
<?php

namespace Symfony\Component\HttpKernel\Tests\Fixtures\ExtensionPresentBundle\Command;

use Symfony\Component\Console\Command\Command;

/**
 * This command has a required parameter on the constructor and will be ignored by the default Bundle implementation.
 *
 * @see Bundle::registerCommands()
 */
class BarCommand extends Command
{
    public function __construct($example, $name = 'bar')
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
