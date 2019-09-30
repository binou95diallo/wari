<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use function is_resource;
use function json_decode;
use function stream_get_contents;

/**
 * Array Type which can be used to generate json arrays.
 *
 * @deprecated Use JsonType instead
 */
class JsonArrayType extends JsonType
{
    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if ($value === null || $value === '') {
            return [];
        }

        $value = is_resource($value) ? stream_get_contents($value) : $value;

        return json_decode($value, true);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::JSON_ARRAY;
    }

    /**
     * {@inheritdoc}
     */
    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }
}
=======
<?php

namespace Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use function is_resource;
use function json_decode;
use function stream_get_contents;

/**
 * Array Type which can be used to generate json arrays.
 *
 * @deprecated Use JsonType instead
 */
class JsonArrayType extends JsonType
{
    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if ($value === null || $value === '') {
            return [];
        }

        $value = is_resource($value) ? stream_get_contents($value) : $value;

        return json_decode($value, true);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::JSON_ARRAY;
    }

    /**
     * {@inheritdoc}
     */
    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
