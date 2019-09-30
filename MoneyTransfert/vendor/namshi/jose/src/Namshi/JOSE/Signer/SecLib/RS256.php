<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\SecLib;

class RS256 extends RSA
{
    public function __construct()
    {
        parent::__construct();
        $this->encryptionAlgorithm->setHash('sha256');
        $this->encryptionAlgorithm->setMGFHash('sha256');
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\SecLib;

class RS256 extends RSA
{
    public function __construct()
    {
        parent::__construct();
        $this->encryptionAlgorithm->setHash('sha256');
        $this->encryptionAlgorithm->setMGFHash('sha256');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
