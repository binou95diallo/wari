<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use LogicException;

final class XmlNotValid extends LogicException implements ConfigurationException
{
    public static function malformed() : self
    {
        return new self('The XML configuration is malformed.');
    }

    public static function failedValidation() : self
    {
        return new self('XML configuration did not pass the validation test.', 10);
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Exception;

use LogicException;

final class XmlNotValid extends LogicException implements ConfigurationException
{
    public static function malformed() : self
    {
        return new self('The XML configuration is malformed.');
    }

    public static function failedValidation() : self
    {
        return new self('XML configuration did not pass the validation test.', 10);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
