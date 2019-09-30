<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Exception;

/**
 * JWTDecodeFailureException is thrown if an error occurs in the token decoding process.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class JWTDecodeFailureException extends JWTFailureException
{
    const INVALID_TOKEN    = 'invalid_token';

    const UNVERIFIED_TOKEN = 'unverified_token';

    const EXPIRED_TOKEN    = 'expired_token';
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Exception;

/**
 * JWTDecodeFailureException is thrown if an error occurs in the token decoding process.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class JWTDecodeFailureException extends JWTFailureException
{
    const INVALID_TOKEN    = 'invalid_token';

    const UNVERIFIED_TOKEN = 'unverified_token';

    const EXPIRED_TOKEN    = 'expired_token';
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
