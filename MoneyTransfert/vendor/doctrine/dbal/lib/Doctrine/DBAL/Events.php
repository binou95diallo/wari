<<<<<<< HEAD
<?php

namespace Doctrine\DBAL;

/**
 * Container for all DBAL events.
 *
 * This class cannot be instantiated.
 */
final class Events
{
    /**
     * Private constructor. This class cannot be instantiated.
     */
    private function __construct()
    {
    }

    public const postConnect = 'postConnect';

    public const onSchemaCreateTable            = 'onSchemaCreateTable';
    public const onSchemaCreateTableColumn      = 'onSchemaCreateTableColumn';
    public const onSchemaDropTable              = 'onSchemaDropTable';
    public const onSchemaAlterTable             = 'onSchemaAlterTable';
    public const onSchemaAlterTableAddColumn    = 'onSchemaAlterTableAddColumn';
    public const onSchemaAlterTableRemoveColumn = 'onSchemaAlterTableRemoveColumn';
    public const onSchemaAlterTableChangeColumn = 'onSchemaAlterTableChangeColumn';
    public const onSchemaAlterTableRenameColumn = 'onSchemaAlterTableRenameColumn';
    public const onSchemaColumnDefinition       = 'onSchemaColumnDefinition';
    public const onSchemaIndexDefinition        = 'onSchemaIndexDefinition';
}
=======
<?php

namespace Doctrine\DBAL;

/**
 * Container for all DBAL events.
 *
 * This class cannot be instantiated.
 */
final class Events
{
    /**
     * Private constructor. This class cannot be instantiated.
     */
    private function __construct()
    {
    }

    public const postConnect = 'postConnect';

    public const onSchemaCreateTable            = 'onSchemaCreateTable';
    public const onSchemaCreateTableColumn      = 'onSchemaCreateTableColumn';
    public const onSchemaDropTable              = 'onSchemaDropTable';
    public const onSchemaAlterTable             = 'onSchemaAlterTable';
    public const onSchemaAlterTableAddColumn    = 'onSchemaAlterTableAddColumn';
    public const onSchemaAlterTableRemoveColumn = 'onSchemaAlterTableRemoveColumn';
    public const onSchemaAlterTableChangeColumn = 'onSchemaAlterTableChangeColumn';
    public const onSchemaAlterTableRenameColumn = 'onSchemaAlterTableRenameColumn';
    public const onSchemaColumnDefinition       = 'onSchemaColumnDefinition';
    public const onSchemaIndexDefinition        = 'onSchemaIndexDefinition';
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
