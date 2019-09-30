<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * HMAC Signer using SHA-384.
 */
class HS384 extends HMAC
{
    public function getHashingAlgorithm()
    {
        return 'sha384';
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * HMAC Signer using SHA-384.
 */
class HS384 extends HMAC
{
    public function getHashingAlgorithm()
    {
        return 'sha384';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
