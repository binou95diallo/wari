<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\SecLib;

use phpseclib\Crypt\RSA as CryptRSA;

class RSA extends PublicKey
{
    public function __construct()
    {
        $this->encryptionAlgorithm = new CryptRSA();
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\SecLib;

use phpseclib\Crypt\RSA as CryptRSA;

class RSA extends PublicKey
{
    public function __construct()
    {
        $this->encryptionAlgorithm = new CryptRSA();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
