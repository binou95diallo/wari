<<<<<<< HEAD
<?php

namespace Vich\UploaderBundle\Injector;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Storage\StorageInterface;

/**
 * FileInjector.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class FileInjector implements FileInjectorInterface
{
    /**
     * @var StorageInterface
     */
    protected $storage;

    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function injectFile($obj, PropertyMapping $mapping): void
    {
        $path = $this->storage->resolvePath($obj, $mapping->getFilePropertyName());

        if (null !== $path) {
            $mapping->setFile($obj, new File($path, false));
        }
    }
}
=======
<?php

namespace Vich\UploaderBundle\Injector;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Storage\StorageInterface;

/**
 * FileInjector.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class FileInjector implements FileInjectorInterface
{
    /**
     * @var StorageInterface
     */
    protected $storage;

    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function injectFile($obj, PropertyMapping $mapping): void
    {
        $path = $this->storage->resolvePath($obj, $mapping->getFilePropertyName());

        if (null !== $path) {
            $mapping->setFile($obj, new File($path, false));
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
