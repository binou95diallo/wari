<<<<<<< HEAD
<?php

namespace Doctrine\DBAL\Event;

use Doctrine\Common\EventArgs;

/**
 * Base class for schema related events.
 */
class SchemaEventArgs extends EventArgs
{
    /** @var bool */
    private $preventDefault = false;

    /**
     * @return \Doctrine\DBAL\Event\SchemaEventArgs
     */
    public function preventDefault()
    {
        $this->preventDefault = true;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDefaultPrevented()
    {
        return $this->preventDefault;
    }
}
=======
<?php

namespace Doctrine\DBAL\Event;

use Doctrine\Common\EventArgs;

/**
 * Base class for schema related events.
 */
class SchemaEventArgs extends EventArgs
{
    /** @var bool */
    private $preventDefault = false;

    /**
     * @return \Doctrine\DBAL\Event\SchemaEventArgs
     */
    public function preventDefault()
    {
        $this->preventDefault = true;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDefaultPrevented()
    {
        return $this->preventDefault;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
