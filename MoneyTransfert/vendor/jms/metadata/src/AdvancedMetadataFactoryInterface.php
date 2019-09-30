<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Metadata;

/**
 * Interface for advanced Metadata Factory implementations.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Jordan Stout <j@jrdn.org>
 */
interface AdvancedMetadataFactoryInterface extends MetadataFactoryInterface
{
    /**
     * Gets all the possible classes.
     *
     * @throws \RuntimeException When driver does not an advanced driver.
     * @return string[]
     */
    public function getAllClassNames(): array;
}
=======
<?php

declare(strict_types=1);

namespace Metadata;

/**
 * Interface for advanced Metadata Factory implementations.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Jordan Stout <j@jrdn.org>
 */
interface AdvancedMetadataFactoryInterface extends MetadataFactoryInterface
{
    /**
     * Gets all the possible classes.
     *
     * @throws \RuntimeException When driver does not an advanced driver.
     * @return string[]
     */
    public function getAllClassNames(): array;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
