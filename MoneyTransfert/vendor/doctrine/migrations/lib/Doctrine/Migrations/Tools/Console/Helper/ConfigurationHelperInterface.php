<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools\Console\Helper;

use Doctrine\Migrations\Configuration\Configuration;
use Symfony\Component\Console\Input\InputInterface;

/**
 * The ConfigurationHelperInterface defines the interface for getting the Configuration instance to be used for migrations.
 */
interface ConfigurationHelperInterface
{
    public function getMigrationConfig(
        InputInterface $input
    ) : Configuration;
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools\Console\Helper;

use Doctrine\Migrations\Configuration\Configuration;
use Symfony\Component\Console\Input\InputInterface;

/**
 * The ConfigurationHelperInterface defines the interface for getting the Configuration instance to be used for migrations.
 */
interface ConfigurationHelperInterface
{
    public function getMigrationConfig(
        InputInterface $input
    ) : Configuration;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
