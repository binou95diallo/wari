<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\SecLib;

class RS384 extends RSA
{
    public function __construct()
    {
        parent::__construct();
        $this->encryptionAlgorithm->setHash('sha384');
        $this->encryptionAlgorithm->setMGFHash('sha384');
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\SecLib;

class RS384 extends RSA
{
    public function __construct()
    {
        parent::__construct();
        $this->encryptionAlgorithm->setHash('sha384');
        $this->encryptionAlgorithm->setMGFHash('sha384');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
