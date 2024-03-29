<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration;

/**
 * The ArrayConfiguration class is responsible for loading migration configuration information from a PHP file.
 *
 * @internal
 */
class ArrayConfiguration extends AbstractFileConfiguration
{
    /** @inheritdoc */
    protected function doLoad(string $file) : void
    {
        $config = require $file;

        if (isset($config['migrations_directory'])) {
            $config['migrations_directory'] = $this->getDirectoryRelativeToFile(
                $file,
                $config['migrations_directory']
            );
        }

        $this->setConfiguration($config);
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration;

/**
 * The ArrayConfiguration class is responsible for loading migration configuration information from a PHP file.
 *
 * @internal
 */
class ArrayConfiguration extends AbstractFileConfiguration
{
    /** @inheritdoc */
    protected function doLoad(string $file) : void
    {
        $config = require $file;

        if (isset($config['migrations_directory'])) {
            $config['migrations_directory'] = $this->getDirectoryRelativeToFile(
                $file,
                $config['migrations_directory']
            );
        }

        $this->setConfiguration($config);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
