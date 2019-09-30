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

namespace Symfony\Component\Security\Core\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * This is a general purpose authentication event.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AuthenticationEvent extends Event
{
    private $authenticationToken;

    public function __construct(TokenInterface $token)
    {
        $this->authenticationToken = $token;
    }

    public function getAuthenticationToken()
    {
        return $this->authenticationToken;
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

namespace Symfony\Component\Security\Core\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * This is a general purpose authentication event.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AuthenticationEvent extends Event
{
    private $authenticationToken;

    public function __construct(TokenInterface $token)
    {
        $this->authenticationToken = $token;
    }

    public function getAuthenticationToken()
    {
        return $this->authenticationToken;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
