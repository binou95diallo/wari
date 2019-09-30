<<<<<<< HEAD
<?php

namespace Doctrine\Common;

/**
 * Contract for classes that are potential listeners of a {@see NotifyPropertyChanged}
 * implementor.
 */
interface PropertyChangedListener
{
    /**
     * Collect information about a property change.
     *
     * @param object $sender       The object on which the property changed.
     * @param string $propertyName The name of the property that changed.
     * @param mixed  $oldValue     The old value of the property that changed.
     * @param mixed  $newValue     The new value of the property that changed.
     *
     * @return void
     */
    public function propertyChanged($sender, $propertyName, $oldValue, $newValue);
}
=======
<?php

namespace Doctrine\Common;

/**
 * Contract for classes that are potential listeners of a {@see NotifyPropertyChanged}
 * implementor.
 */
interface PropertyChangedListener
{
    /**
     * Collect information about a property change.
     *
     * @param object $sender       The object on which the property changed.
     * @param string $propertyName The name of the property that changed.
     * @param mixed  $oldValue     The old value of the property that changed.
     * @param mixed  $newValue     The new value of the property that changed.
     *
     * @return void
     */
    public function propertyChanged($sender, $propertyName, $oldValue, $newValue);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
