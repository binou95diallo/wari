<<<<<<< HEAD
<?php

namespace Vich\UploaderBundle\Injector;

use Vich\UploaderBundle\Mapping\PropertyMapping;

/**
 * FileInjectorInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface FileInjectorInterface
{
    /**
     * Injects the uploadable field of the specified object and mapping.
     *
     * The field is populated with a \Symfony\Component\HttpFoundation\File\File
     * instance.
     *
     * @param object          $obj     The object
     * @param PropertyMapping $mapping The mapping representing the field to populate
     */
    public function injectFile($obj, PropertyMapping $mapping): void;
}
=======
<?php

namespace Vich\UploaderBundle\Injector;

use Vich\UploaderBundle\Mapping\PropertyMapping;

/**
 * FileInjectorInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface FileInjectorInterface
{
    /**
     * Injects the uploadable field of the specified object and mapping.
     *
     * The field is populated with a \Symfony\Component\HttpFoundation\File\File
     * instance.
     *
     * @param object          $obj     The object
     * @param PropertyMapping $mapping The mapping representing the field to populate
     */
    public function injectFile($obj, PropertyMapping $mapping): void;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
