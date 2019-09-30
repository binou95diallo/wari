<<<<<<< HEAD
<?php

namespace Vich\UploaderBundle\Adapter;

/**
 * AdapterInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface AdapterInterface
{
    /**
     * Gets the mapped object from an event.
     *
     * @param object $event The event
     *
     * @return object The mapped object
     */
    public function getObjectFromArgs($event);

    /**
     * Recomputes the change set for the object.
     *
     * @param object $event The event
     */
    public function recomputeChangeSet($event);
}
=======
<?php

namespace Vich\UploaderBundle\Adapter;

/**
 * AdapterInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface AdapterInterface
{
    /**
     * Gets the mapped object from an event.
     *
     * @param object $event The event
     *
     * @return object The mapped object
     */
    public function getObjectFromArgs($event);

    /**
     * Recomputes the change set for the object.
     *
     * @param object $event The event
     */
    public function recomputeChangeSet($event);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
