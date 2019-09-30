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

namespace Symfony\Component\DependencyInjection\Argument;

/**
 * Represents a complex argument containing nested values.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
interface ArgumentInterface
{
    /**
     * @return array
     */
    public function getValues();

    public function setValues(array $values);
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

namespace Symfony\Component\DependencyInjection\Argument;

/**
 * Represents a complex argument containing nested values.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
interface ArgumentInterface
{
    /**
     * @return array
     */
    public function getValues();

    public function setValues(array $values);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
