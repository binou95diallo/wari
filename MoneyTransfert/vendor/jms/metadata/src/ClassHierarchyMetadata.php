<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Metadata;

/**
 * Represents the metadata for the entire class hierarchy.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ClassHierarchyMetadata
{
    /**
     * @var ClassMetadata[]
     */
    public $classMetadata = [];

    public function addClassMetadata(ClassMetadata $metadata): void
    {
        $this->classMetadata[$metadata->name] = $metadata;
    }

    public function getRootClassMetadata(): ?ClassMetadata
    {
        return reset($this->classMetadata);
    }

    public function getOutsideClassMetadata(): ?ClassMetadata
    {
        return end($this->classMetadata);
    }

    public function isFresh(int $timestamp): bool
    {
        foreach ($this->classMetadata as $metadata) {
            if (!$metadata->isFresh($timestamp)) {
                return false;
            }
        }

        return true;
    }
}
=======
<?php

declare(strict_types=1);

namespace Metadata;

/**
 * Represents the metadata for the entire class hierarchy.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ClassHierarchyMetadata
{
    /**
     * @var ClassMetadata[]
     */
    public $classMetadata = [];

    public function addClassMetadata(ClassMetadata $metadata): void
    {
        $this->classMetadata[$metadata->name] = $metadata;
    }

    public function getRootClassMetadata(): ?ClassMetadata
    {
        return reset($this->classMetadata);
    }

    public function getOutsideClassMetadata(): ?ClassMetadata
    {
        return end($this->classMetadata);
    }

    public function isFresh(int $timestamp): bool
    {
        foreach ($this->classMetadata as $metadata) {
            if (!$metadata->isFresh($timestamp)) {
                return false;
            }
        }

        return true;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
