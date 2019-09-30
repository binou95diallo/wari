<<<<<<< HEAD
<?php

namespace Vich\UploaderBundle\Adapter\Propel;

use Vich\UploaderBundle\Adapter\AdapterInterface;

/**
 * Propel adapter.
 *
 * @author Kévin Gomez <contact@kevingomez.fr>
 */
class PropelORMAdapter implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public function getObjectFromArgs($event)
    {
        return $event->getSubject();
    }

    /**
     * {@inheritdoc}
     */
    public function recomputeChangeSet($event): void
    {
    }
}
=======
<?php

namespace Vich\UploaderBundle\Adapter\Propel;

use Vich\UploaderBundle\Adapter\AdapterInterface;

/**
 * Propel adapter.
 *
 * @author Kévin Gomez <contact@kevingomez.fr>
 */
class PropelORMAdapter implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public function getObjectFromArgs($event)
    {
        return $event->getSubject();
    }

    /**
     * {@inheritdoc}
     */
    public function recomputeChangeSet($event): void
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
