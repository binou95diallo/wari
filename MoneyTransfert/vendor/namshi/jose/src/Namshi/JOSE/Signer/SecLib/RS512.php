<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\SecLib;

class RS512 extends RSA
{
    public function __construct()
    {
        parent::__construct();
        $this->encryptionAlgorithm->setHash('sha512');
        $this->encryptionAlgorithm->setMGFHash('sha512');
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\SecLib;

class RS512 extends RSA
{
    public function __construct()
    {
        parent::__construct();
        $this->encryptionAlgorithm->setHash('sha512');
        $this->encryptionAlgorithm->setMGFHash('sha512');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
