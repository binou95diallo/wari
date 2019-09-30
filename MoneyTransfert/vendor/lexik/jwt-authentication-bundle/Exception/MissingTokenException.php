<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Exception;

use Symfony\Component\Security\Core\Exception\AuthenticationException;

/**
 * Exception to be thrown in case of invalid token during an authentication process.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class MissingTokenException extends AuthenticationException
{
    /**
     * {@inheritdoc}
     */
    public function getMessageKey()
    {
        return 'JWT Token not found';
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Exception;

use Symfony\Component\Security\Core\Exception\AuthenticationException;

/**
 * Exception to be thrown in case of invalid token during an authentication process.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class MissingTokenException extends AuthenticationException
{
    /**
     * {@inheritdoc}
     */
    public function getMessageKey()
    {
        return 'JWT Token not found';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
