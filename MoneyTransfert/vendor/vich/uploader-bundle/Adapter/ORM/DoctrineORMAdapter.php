<<<<<<< HEAD
<?php

namespace Vich\UploaderBundle\Adapter\ORM;

use Vich\UploaderBundle\Adapter\AdapterInterface;

/**
 * DoctrineORMAdapter.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class DoctrineORMAdapter implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public function getObjectFromArgs($event)
    {
        return $event->getEntity();
    }

    /**
     * {@inheritdoc}
     */
    public function recomputeChangeSet($event): void
    {
        $object = $this->getObjectFromArgs($event);

        $em = $event->getEntityManager();
        $uow = $em->getUnitOfWork();
        $metadata = $em->getClassMetadata(\get_class($object));
        $uow->recomputeSingleEntityChangeSet($metadata, $object);
    }
}
=======
<?php

namespace Vich\UploaderBundle\Adapter\ORM;

use Vich\UploaderBundle\Adapter\AdapterInterface;

/**
 * DoctrineORMAdapter.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class DoctrineORMAdapter implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public function getObjectFromArgs($event)
    {
        return $event->getEntity();
    }

    /**
     * {@inheritdoc}
     */
    public function recomputeChangeSet($event): void
    {
        $object = $this->getObjectFromArgs($event);

        $em = $event->getEntityManager();
        $uow = $em->getUnitOfWork();
        $metadata = $em->getClassMetadata(\get_class($object));
        $uow->recomputeSingleEntityChangeSet($metadata, $object);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
