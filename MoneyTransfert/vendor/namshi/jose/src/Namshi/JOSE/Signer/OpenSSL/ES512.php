<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * Class responsible to sign inputs with the ECDSA algorithm, after hashing it.
 */
class ES512 extends ECDSA
{
    public function getHashingAlgorithm()
    {
        return version_compare(phpversion(), '5.4.8', '<') ? 'SHA512' : OPENSSL_ALGO_SHA512;
    }

    protected function getSupportedECDSACurve()
    {
        return '1.3.132.0.35';
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * Class responsible to sign inputs with the ECDSA algorithm, after hashing it.
 */
class ES512 extends ECDSA
{
    public function getHashingAlgorithm()
    {
        return version_compare(phpversion(), '5.4.8', '<') ? 'SHA512' : OPENSSL_ALGO_SHA512;
    }

    protected function getSupportedECDSACurve()
    {
        return '1.3.132.0.35';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
