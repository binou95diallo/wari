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

namespace Symfony\Component\Security\Csrf\TokenStorage;

/**
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 */
interface ClearableTokenStorageInterface extends TokenStorageInterface
{
    /**
     * Removes all CSRF tokens.
     */
    public function clear();
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

namespace Symfony\Component\Security\Csrf\TokenStorage;

/**
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 */
interface ClearableTokenStorageInterface extends TokenStorageInterface
{
    /**
     * Removes all CSRF tokens.
     */
    public function clear();
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
