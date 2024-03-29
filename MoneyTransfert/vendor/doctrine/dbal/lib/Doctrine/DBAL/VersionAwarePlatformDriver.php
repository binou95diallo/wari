<<<<<<< HEAD
<?php

namespace Doctrine\DBAL;

use Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * Contract for a driver that is able to create platform instances by version.
 *
 * Doctrine uses different platform classes for different vendor versions to
 * support the correct features and SQL syntax of each version.
 * This interface should be implemented by drivers that are capable to do this
 * distinction.
 */
interface VersionAwarePlatformDriver
{
    /**
     * Factory method for creating the appropriate platform instance for the given version.
     *
     * @param string $version The platform/server version string to evaluate. This should be given in the notation
     *                        the underlying database vendor uses.
     *
     * @return AbstractPlatform
     *
     * @throws DBALException If the given version string could not be evaluated.
     */
    public function createDatabasePlatformForVersion($version);
}
=======
<?php

namespace Doctrine\DBAL;

use Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * Contract for a driver that is able to create platform instances by version.
 *
 * Doctrine uses different platform classes for different vendor versions to
 * support the correct features and SQL syntax of each version.
 * This interface should be implemented by drivers that are capable to do this
 * distinction.
 */
interface VersionAwarePlatformDriver
{
    /**
     * Factory method for creating the appropriate platform instance for the given version.
     *
     * @param string $version The platform/server version string to evaluate. This should be given in the notation
     *                        the underlying database vendor uses.
     *
     * @return AbstractPlatform
     *
     * @throws DBALException If the given version string could not be evaluated.
     */
    public function createDatabasePlatformForVersion($version);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
