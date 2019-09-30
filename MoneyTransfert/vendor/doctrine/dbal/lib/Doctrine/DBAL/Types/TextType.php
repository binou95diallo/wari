<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use function is_resource;
use function stream_get_contents;

/**
 * Type that maps an SQL CLOB to a PHP string.
 */
class TextType extends Type
{
    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return $platform->getClobTypeDeclarationSQL($fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return is_resource($value) ? stream_get_contents($value) : $value;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::TEXT;
    }
}
=======
<?php

namespace Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use function is_resource;
use function stream_get_contents;

/**
 * Type that maps an SQL CLOB to a PHP string.
 */
class TextType extends Type
{
    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return $platform->getClobTypeDeclarationSQL($fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return is_resource($value) ? stream_get_contents($value) : $value;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::TEXT;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
