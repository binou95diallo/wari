<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Base64;

class Base64UrlSafeEncoder implements Encoder
{
    public function encode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function decode($data)
    {
        return base64_decode(strtr($data, '-_', '+/'));
    }
}
=======
<?php

namespace Namshi\JOSE\Base64;

class Base64UrlSafeEncoder implements Encoder
{
    public function encode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function decode($data)
    {
        return base64_decode(strtr($data, '-_', '+/'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
