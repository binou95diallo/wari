<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Metadata\Driver;

interface FileLocatorInterface
{
    public function findFileForClass(\ReflectionClass $class, string $extension): ?string;
}
=======
<?php

declare(strict_types=1);

namespace Metadata\Driver;

interface FileLocatorInterface
{
    public function findFileForClass(\ReflectionClass $class, string $extension): ?string;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
