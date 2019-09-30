<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

use Namshi\JOSE\Signer\SignerInterface;

/**
 * None Signer.
 */
class None implements SignerInterface
{
    /**
     * {@inheritdoc}
     */
    public function sign($input, $key)
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function verify($key, $signature, $input)
    {
        return $signature === '';
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

use Namshi\JOSE\Signer\SignerInterface;

/**
 * None Signer.
 */
class None implements SignerInterface
{
    /**
     * {@inheritdoc}
     */
    public function sign($input, $key)
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function verify($key, $signature, $input)
    {
        return $signature === '';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
