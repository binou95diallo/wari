<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * HMAC Signer using SHA-256.
 */
class HS256 extends HMAC
{
    public function getHashingAlgorithm()
    {
        return 'sha256';
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * HMAC Signer using SHA-256.
 */
class HS256 extends HMAC
{
    public function getHashingAlgorithm()
    {
        return 'sha256';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
