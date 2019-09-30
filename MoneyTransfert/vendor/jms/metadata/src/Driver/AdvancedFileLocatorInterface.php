<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Metadata\Driver;

/**
 * Forces advanced logic on a file locator.
 *
 * @author Jordan Stout <j@jrdn.org>
 */
interface AdvancedFileLocatorInterface extends FileLocatorInterface
{
    /**
     * Finds all possible metadata files.*
     * @return string[]
     */
    public function findAllClasses(string $extension): array;
}
=======
<?php

declare(strict_types=1);

namespace Metadata\Driver;

/**
 * Forces advanced logic on a file locator.
 *
 * @author Jordan Stout <j@jrdn.org>
 */
interface AdvancedFileLocatorInterface extends FileLocatorInterface
{
    /**
     * Finds all possible metadata files.*
     * @return string[]
     */
    public function findAllClasses(string $extension): array;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
