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

namespace Symfony\Component\Security\Core\Exception;

/**
 * LogoutException is thrown when the account cannot be logged out.
 *
 * @author Jeremy Mikola <jmikola@gmail.com>
 */
class LogoutException extends RuntimeException
{
    public function __construct(string $message = 'Logout Exception', \Exception $previous = null)
    {
        parent::__construct($message, 403, $previous);
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

namespace Symfony\Component\Security\Core\Exception;

/**
 * LogoutException is thrown when the account cannot be logged out.
 *
 * @author Jeremy Mikola <jmikola@gmail.com>
 */
class LogoutException extends RuntimeException
{
    public function __construct(string $message = 'Logout Exception', \Exception $previous = null)
    {
        parent::__construct($message, 403, $previous);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
