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

namespace Symfony\Component\Security\Http\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InteractiveLoginEvent extends Event
{
    private $request;
    private $authenticationToken;

    public function __construct(Request $request, TokenInterface $authenticationToken)
    {
        $this->request = $request;
        $this->authenticationToken = $authenticationToken;
    }

    /**
     * Gets the request.
     *
     * @return Request A Request instance
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Gets the authentication token.
     *
     * @return TokenInterface A TokenInterface instance
     */
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

namespace Symfony\Component\Security\Http\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InteractiveLoginEvent extends Event
{
    private $request;
    private $authenticationToken;

    public function __construct(Request $request, TokenInterface $authenticationToken)
    {
        $this->request = $request;
        $this->authenticationToken = $authenticationToken;
    }

    /**
     * Gets the request.
     *
     * @return Request A Request instance
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Gets the authentication token.
     *
     * @return TokenInterface A TokenInterface instance
     */
    public function getAuthenticationToken()
    {
        return $this->authenticationToken;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
