<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Response;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Response sent on successful JWT authentication.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
final class JWTAuthenticationSuccessResponse extends JsonResponse
{
    /**
     * @param string $token Json Web Token
     * @param array  $data  Extra data passed to the response
     */
    public function __construct($token, array $data = [])
    {
        parent::__construct(['token' => $token] + $data);
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Response;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Response sent on successful JWT authentication.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
final class JWTAuthenticationSuccessResponse extends JsonResponse
{
    /**
     * @param string $token Json Web Token
     * @param array  $data  Extra data passed to the response
     */
    public function __construct($token, array $data = [])
    {
        parent::__construct(['token' => $token] + $data);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
