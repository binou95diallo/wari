<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Encoder;

use Lexik\Bundle\JWTAuthenticationBundle\Exception\JWTEncodeFailureException;

/**
 * HeaderAwareJWTEncoderInterface.
 */
interface HeaderAwareJWTEncoderInterface extends JWTEncoderInterface
{
    /**
     * @param array $data
     * @param array $header
     *
     * @return string the encoded token string
     *
     * @throws JWTEncodeFailureException If an error occurred while trying to create
     *                                   the token (invalid crypto key, invalid payload...)
     */
    public function encode(array $data, array $header = []);
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Encoder;

use Lexik\Bundle\JWTAuthenticationBundle\Exception\JWTEncodeFailureException;

/**
 * HeaderAwareJWTEncoderInterface.
 */
interface HeaderAwareJWTEncoderInterface extends JWTEncoderInterface
{
    /**
     * @param array $data
     * @param array $header
     *
     * @return string the encoded token string
     *
     * @throws JWTEncodeFailureException If an error occurred while trying to create
     *                                   the token (invalid crypto key, invalid payload...)
     */
    public function encode(array $data, array $header = []);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
