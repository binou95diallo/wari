<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Metadata\Driver;

/**
 * Forces advanced logic to drivers.
 *
 * @author Jordan Stout <j@jrdn.org>
 */
interface AdvancedDriverInterface extends DriverInterface
{
    /**
     * Gets all the metadata class names known to this driver.
     *
     * @return string[]
     */
    public function getAllClassNames(): array;
}
=======
<?php

declare(strict_types=1);

namespace Metadata\Driver;

/**
 * Forces advanced logic to drivers.
 *
 * @author Jordan Stout <j@jrdn.org>
 */
interface AdvancedDriverInterface extends DriverInterface
{
    /**
     * Gets all the metadata class names known to this driver.
     *
     * @return string[]
     */
    public function getAllClassNames(): array;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
