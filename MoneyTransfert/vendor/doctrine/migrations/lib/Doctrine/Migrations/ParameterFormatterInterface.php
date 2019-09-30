<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations;

/**
 * The ParameterFormatterInterface defines the interface for formatting SQL query parameters to a string
 * for display output.
 *
 * @internal
 *
 * @see Doctrine\Migrations\ParameterFormatter
 */
interface ParameterFormatterInterface
{
    /**
     * @param mixed[] $params
     * @param mixed[] $types
     */
    public function formatParameters(array $params, array $types) : string;
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations;

/**
 * The ParameterFormatterInterface defines the interface for formatting SQL query parameters to a string
 * for display output.
 *
 * @internal
 *
 * @see Doctrine\Migrations\ParameterFormatter
 */
interface ParameterFormatterInterface
{
    /**
     * @param mixed[] $params
     * @param mixed[] $types
     */
    public function formatParameters(array $params, array $types) : string;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
