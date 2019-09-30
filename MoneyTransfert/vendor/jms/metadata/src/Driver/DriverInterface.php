<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Metadata\Driver;

use Metadata\ClassMetadata;

interface DriverInterface
{
    public function loadMetadataForClass(\ReflectionClass $class): ?ClassMetadata;
}
=======
<?php

declare(strict_types=1);

namespace Metadata\Driver;

use Metadata\ClassMetadata;

interface DriverInterface
{
    public function loadMetadataForClass(\ReflectionClass $class): ?ClassMetadata;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
