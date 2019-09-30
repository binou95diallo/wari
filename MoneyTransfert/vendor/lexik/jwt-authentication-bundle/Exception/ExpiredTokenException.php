<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Exception;

use Lexik\Bundle\JWTAuthenticationBundle\Security\Guard\JWTTokenAuthenticator;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

/**
 * Exception that should be thrown from a {@link JWTTokenAuthenticator} implementation during
 * an authentication process.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class ExpiredTokenException extends AuthenticationException
{
    /**
     * {@inheritdoc}
     */
    public function getMessageKey()
    {
        return 'Expired JWT Token';
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Exception;

use Lexik\Bundle\JWTAuthenticationBundle\Security\Guard\JWTTokenAuthenticator;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

/**
 * Exception that should be thrown from a {@link JWTTokenAuthenticator} implementation during
 * an authentication process.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class ExpiredTokenException extends AuthenticationException
{
    /**
     * {@inheritdoc}
     */
    public function getMessageKey()
    {
        return 'Expired JWT Token';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
