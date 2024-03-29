<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Contracts\EventDispatcher;

use Psr\EventDispatcher\StoppableEventInterface;

if (interface_exists(StoppableEventInterface::class)) {
    /**
     * Event is the base class for classes containing event data.
     *
     * This class contains no event data. It is used by events that do not pass
     * state information to an event handler when an event is raised.
     *
     * You can call the method stopPropagation() to abort the execution of
     * further listeners in your event listener.
     *
     * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
     * @author Jonathan Wage <jonwage@gmail.com>
     * @author Roman Borschel <roman@code-factory.org>
     * @author Bernhard Schussek <bschussek@gmail.com>
     * @author Nicolas Grekas <p@tchwork.com>
     */
    class Event implements StoppableEventInterface
    {
        private $propagationStopped = false;

        /**
         * Returns whether further event listeners should be triggered.
         */
        public function isPropagationStopped(): bool
        {
            return $this->propagationStopped;
        }

        /**
         * Stops the propagation of the event to further event listeners.
         *
         * If multiple event listeners are connected to the same event, no
         * further event listener will be triggered once any trigger calls
         * stopPropagation().
         */
        public function stopPropagation(): void
        {
            $this->propagationStopped = true;
        }
    }
} else {
    /**
     * Event is the base class for classes containing event data.
     *
     * This class contains no event data. It is used by events that do not pass
     * state information to an event handler when an event is raised.
     *
     * You can call the method stopPropagation() to abort the execution of
     * further listeners in your event listener.
     *
     * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
     * @author Jonathan Wage <jonwage@gmail.com>
     * @author Roman Borschel <roman@code-factory.org>
     * @author Bernhard Schussek <bschussek@gmail.com>
     * @author Nicolas Grekas <p@tchwork.com>
     */
    class Event
    {
        private $propagationStopped = false;

        /**
         * Returns whether further event listeners should be triggered.
         */
        public function isPropagationStopped(): bool
        {
            return $this->propagationStopped;
        }

        /**
         * Stops the propagation of the event to further event listeners.
         *
         * If multiple event listeners are connected to the same event, no
         * further event listener will be triggered once any trigger calls
         * stopPropagation().
         */
        public function stopPropagation(): void
        {
            $this->propagationStopped = true;
        }
    }
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Contracts\EventDispatcher;

use Psr\EventDispatcher\StoppableEventInterface;

if (interface_exists(StoppableEventInterface::class)) {
    /**
     * Event is the base class for classes containing event data.
     *
     * This class contains no event data. It is used by events that do not pass
     * state information to an event handler when an event is raised.
     *
     * You can call the method stopPropagation() to abort the execution of
     * further listeners in your event listener.
     *
     * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
     * @author Jonathan Wage <jonwage@gmail.com>
     * @author Roman Borschel <roman@code-factory.org>
     * @author Bernhard Schussek <bschussek@gmail.com>
     * @author Nicolas Grekas <p@tchwork.com>
     */
    class Event implements StoppableEventInterface
    {
        private $propagationStopped = false;

        /**
         * Returns whether further event listeners should be triggered.
         */
        public function isPropagationStopped(): bool
        {
            return $this->propagationStopped;
        }

        /**
         * Stops the propagation of the event to further event listeners.
         *
         * If multiple event listeners are connected to the same event, no
         * further event listener will be triggered once any trigger calls
         * stopPropagation().
         */
        public function stopPropagation(): void
        {
            $this->propagationStopped = true;
        }
    }
} else {
    /**
     * Event is the base class for classes containing event data.
     *
     * This class contains no event data. It is used by events that do not pass
     * state information to an event handler when an event is raised.
     *
     * You can call the method stopPropagation() to abort the execution of
     * further listeners in your event listener.
     *
     * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
     * @author Jonathan Wage <jonwage@gmail.com>
     * @author Roman Borschel <roman@code-factory.org>
     * @author Bernhard Schussek <bschussek@gmail.com>
     * @author Nicolas Grekas <p@tchwork.com>
     */
    class Event
    {
        private $propagationStopped = false;

        /**
         * Returns whether further event listeners should be triggered.
         */
        public function isPropagationStopped(): bool
        {
            return $this->propagationStopped;
        }

        /**
         * Stops the propagation of the event to further event listeners.
         *
         * If multiple event listeners are connected to the same event, no
         * further event listener will be triggered once any trigger calls
         * stopPropagation().
         */
        public function stopPropagation(): void
        {
            $this->propagationStopped = true;
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
