<<<<<<< HEAD
<?php

namespace Doctrine\Common\Persistence\Mapping\Driver;

use Doctrine\Common\Persistence\Mapping\ClassMetadata;

/**
 * The PHPDriver includes php files which just populate ClassMetadataInfo
 * instances with plain PHP code.
 */
class PHPDriver extends FileDriver
{
    /** @var ClassMetadata */
    protected $metadata;

    /**
     * {@inheritDoc}
     */
    public function __construct($locator)
    {
        parent::__construct($locator, '.php');
    }

    /**
     * {@inheritDoc}
     */
    public function loadMetadataForClass($className, ClassMetadata $metadata)
    {
        $this->metadata = $metadata;

        $this->loadMappingFile($this->locator->findMappingFile($className));
    }

    /**
     * {@inheritDoc}
     */
    protected function loadMappingFile($file)
    {
        $metadata = $this->metadata;
        include $file;

        return [$metadata->getName() => $metadata];
    }
}
=======
<?php

namespace Doctrine\Common\Persistence\Mapping\Driver;

use Doctrine\Common\Persistence\Mapping\ClassMetadata;

/**
 * The PHPDriver includes php files which just populate ClassMetadataInfo
 * instances with plain PHP code.
 */
class PHPDriver extends FileDriver
{
    /** @var ClassMetadata */
    protected $metadata;

    /**
     * {@inheritDoc}
     */
    public function __construct($locator)
    {
        parent::__construct($locator, '.php');
    }

    /**
     * {@inheritDoc}
     */
    public function loadMetadataForClass($className, ClassMetadata $metadata)
    {
        $this->metadata = $metadata;

        $this->loadMappingFile($this->locator->findMappingFile($className));
    }

    /**
     * {@inheritDoc}
     */
    protected function loadMappingFile($file)
    {
        $metadata = $this->metadata;
        include $file;

        return [$metadata->getName() => $metadata];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
