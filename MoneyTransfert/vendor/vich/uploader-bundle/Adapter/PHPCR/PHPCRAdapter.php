<<<<<<< HEAD
<?php

namespace Vich\UploaderBundle\Adapter\PHPCR;

use Vich\UploaderBundle\Adapter\AdapterInterface;

/**
 * @author Ben Glassman <bglassman@gmail.com>
 */
class PHPCRAdapter implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public function getObjectFromArgs($event)
    {
        return $event->getObject();
    }

    /**
     * {@inheritdoc}
     */
    public function recomputeChangeSet($event): void
    {
        $object = $this->getObjectFromArgs($event);

        $dm = $event->getObjectManager();
        $uow = $dm->getUnitOfWork();
        $uow->computeSingleDocumentChangeSet($object);
    }
}
=======
<?php

namespace Vich\UploaderBundle\Adapter\PHPCR;

use Vich\UploaderBundle\Adapter\AdapterInterface;

/**
 * @author Ben Glassman <bglassman@gmail.com>
 */
class PHPCRAdapter implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public function getObjectFromArgs($event)
    {
        return $event->getObject();
    }

    /**
     * {@inheritdoc}
     */
    public function recomputeChangeSet($event): void
    {
        $object = $this->getObjectFromArgs($event);

        $dm = $event->getObjectManager();
        $uow = $dm->getUnitOfWork();
        $uow->computeSingleDocumentChangeSet($object);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
