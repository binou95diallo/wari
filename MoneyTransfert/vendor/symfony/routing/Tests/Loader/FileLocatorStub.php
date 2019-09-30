<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Tests\Loader;

use Symfony\Component\Config\FileLocatorInterface;

class FileLocatorStub implements FileLocatorInterface
{
    public function locate($name, $currentPath = null, $first = true)
    {
        if (0 === strpos($name, 'http')) {
            return $name;
        }

        return rtrim($currentPath, '/').'/'.$name;
    }
}
=======
<?php

namespace Symfony\Component\Routing\Tests\Loader;

use Symfony\Component\Config\FileLocatorInterface;

class FileLocatorStub implements FileLocatorInterface
{
    public function locate($name, $currentPath = null, $first = true)
    {
        if (0 === strpos($name, 'http')) {
            return $name;
        }

        return rtrim($currentPath, '/').'/'.$name;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
