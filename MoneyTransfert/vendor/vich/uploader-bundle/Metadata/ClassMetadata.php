<<<<<<< HEAD
<?php

namespace Vich\UploaderBundle\Metadata;

use Metadata\ClassMetadata as BaseClassMetadata;

class ClassMetadata extends BaseClassMetadata
{
    public $fields = [];

    public function serialize(): string
    {
        return \serialize([
            $this->fields,
            parent::serialize(),
        ]);
    }

    public function unserialize($str): void
    {
        [
            $this->fields,
            $parentStr
            ] = \unserialize($str);

        parent::unserialize($parentStr);
    }
}
=======
<?php

namespace Vich\UploaderBundle\Metadata;

use Metadata\ClassMetadata as BaseClassMetadata;

class ClassMetadata extends BaseClassMetadata
{
    public $fields = [];

    public function serialize(): string
    {
        return \serialize([
            $this->fields,
            parent::serialize(),
        ]);
    }

    public function unserialize($str): void
    {
        [
            $this->fields,
            $parentStr
            ] = \unserialize($str);

        parent::unserialize($parentStr);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
