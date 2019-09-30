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

namespace Symfony\Component\Validator;

use Symfony\Component\Validator\Constraints\GroupSequence;

/**
 * Defines the interface for a group sequence provider.
 */
interface GroupSequenceProviderInterface
{
    /**
     * Returns which validation groups should be used for a certain state
     * of the object.
     *
     * @return string[]|string[][]|GroupSequence An array of validation groups
     */
    public function getGroupSequence();
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

namespace Symfony\Component\Validator;

use Symfony\Component\Validator\Constraints\GroupSequence;

/**
 * Defines the interface for a group sequence provider.
 */
interface GroupSequenceProviderInterface
{
    /**
     * Returns which validation groups should be used for a certain state
     * of the object.
     *
     * @return string[]|string[][]|GroupSequence An array of validation groups
     */
    public function getGroupSequence();
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
