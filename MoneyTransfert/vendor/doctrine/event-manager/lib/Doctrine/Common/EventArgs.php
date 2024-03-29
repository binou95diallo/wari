<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Common;

/**
 * EventArgs is the base class for classes containing event data.
 *
 * This class contains no event data. It is used by events that do not pass state
 * information to an event handler when an event is raised. The single empty EventArgs
 * instance can be obtained through {@link getEmptyInstance}.
 */
class EventArgs
{
    /**
     * Single instance of EventArgs.
     *
     * @var EventArgs
     */
    private static $_emptyEventArgsInstance;

    /**
     * Gets the single, empty and immutable EventArgs instance.
     *
     * This instance will be used when events are dispatched without any parameter,
     * like this: EventManager::dispatchEvent('eventname');
     *
     * The benefit from this is that only one empty instance is instantiated and shared
     * (otherwise there would be instances for every dispatched in the abovementioned form).
     *
     * @see EventManager::dispatchEvent
     *
     * @link https://msdn.microsoft.com/en-us/library/system.eventargs.aspx
     *
     * @return EventArgs
     */
    public static function getEmptyInstance()
    {
        if (! self::$_emptyEventArgsInstance) {
            self::$_emptyEventArgsInstance = new EventArgs();
        }

        return self::$_emptyEventArgsInstance;
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Common;

/**
 * EventArgs is the base class for classes containing event data.
 *
 * This class contains no event data. It is used by events that do not pass state
 * information to an event handler when an event is raised. The single empty EventArgs
 * instance can be obtained through {@link getEmptyInstance}.
 */
class EventArgs
{
    /**
     * Single instance of EventArgs.
     *
     * @var EventArgs
     */
    private static $_emptyEventArgsInstance;

    /**
     * Gets the single, empty and immutable EventArgs instance.
     *
     * This instance will be used when events are dispatched without any parameter,
     * like this: EventManager::dispatchEvent('eventname');
     *
     * The benefit from this is that only one empty instance is instantiated and shared
     * (otherwise there would be instances for every dispatched in the abovementioned form).
     *
     * @see EventManager::dispatchEvent
     *
     * @link https://msdn.microsoft.com/en-us/library/system.eventargs.aspx
     *
     * @return EventArgs
     */
    public static function getEmptyInstance()
    {
        if (! self::$_emptyEventArgsInstance) {
            self::$_emptyEventArgsInstance = new EventArgs();
        }

        return self::$_emptyEventArgsInstance;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
