<<<<<<< HEAD
<?php

namespace Vich\UploaderBundle\Naming;

/**
 * Class CurrentDateTimeHelper.
 *
 * @author Vyacheslav Startsev <vyacheslav.startsev@gmail.com>
 */
class CurrentDateTimeHelper implements DateTimeHelper
{
    /**
     * {@inheritdoc}
     */
    public function getTimestamp(): int
    {
        return \time();
    }
}
=======
<?php

namespace Vich\UploaderBundle\Naming;

/**
 * Class CurrentDateTimeHelper.
 *
 * @author Vyacheslav Startsev <vyacheslav.startsev@gmail.com>
 */
class CurrentDateTimeHelper implements DateTimeHelper
{
    /**
     * {@inheritdoc}
     */
    public function getTimestamp(): int
    {
        return \time();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
