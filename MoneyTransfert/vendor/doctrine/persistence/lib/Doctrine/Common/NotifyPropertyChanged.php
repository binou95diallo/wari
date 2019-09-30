<<<<<<< HEAD
<?php

namespace Doctrine\Common;

/**
 * Interface for classes that notify event listeners of changes to their managed properties.
 *
 * This interface is implemented by objects that manually want to notify their object manager or
 * other listeners when properties change, instead of relying on the object manager to compute
 * property changes itself when changes are to be persisted.
 */
interface NotifyPropertyChanged
{
    /**
     * Adds a listener that wants to be notified about property changes.
     *
     * @return void
     */
    public function addPropertyChangedListener(PropertyChangedListener $listener);
}
=======
<?php

namespace Doctrine\Common;

/**
 * Interface for classes that notify event listeners of changes to their managed properties.
 *
 * This interface is implemented by objects that manually want to notify their object manager or
 * other listeners when properties change, instead of relying on the object manager to compute
 * property changes itself when changes are to be persisted.
 */
interface NotifyPropertyChanged
{
    /**
     * Adds a listener that wants to be notified about property changes.
     *
     * @return void
     */
    public function addPropertyChangedListener(PropertyChangedListener $listener);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
