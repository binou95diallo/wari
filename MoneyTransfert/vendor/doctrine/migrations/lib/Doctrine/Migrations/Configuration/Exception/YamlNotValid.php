<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use LogicException;

final class YamlNotValid extends LogicException implements ConfigurationException
{
    public static function malformed() : self
    {
        return new self('The YAML configuration is malformed.');
    }

    public static function invalid() : self
    {
        return new self('Configuration is not valid YAML.', 10);
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use LogicException;

final class YamlNotValid extends LogicException implements ConfigurationException
{
    public static function malformed() : self
    {
        return new self('The YAML configuration is malformed.');
    }

    public static function invalid() : self
    {
        return new self('Configuration is not valid YAML.', 10);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
