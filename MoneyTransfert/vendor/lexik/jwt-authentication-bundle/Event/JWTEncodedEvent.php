<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Event;

/**
 * JWTEncodedEvent.
 */
class JWTEncodedEvent extends Event
{
    /**
     * @var string
     */
    private $jwtString;

    /**
     * @param string $jwtString
     */
    public function __construct($jwtString)
    {
        $this->jwtString = $jwtString;
    }

    /**
     * @return string
     */
    public function getJWTString()
    {
        return $this->jwtString;
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Event;

/**
 * JWTEncodedEvent.
 */
class JWTEncodedEvent extends Event
{
    /**
     * @var string
     */
    private $jwtString;

    /**
     * @param string $jwtString
     */
    public function __construct($jwtString)
    {
        $this->jwtString = $jwtString;
    }

    /**
     * @return string
     */
    public function getJWTString()
    {
        return $this->jwtString;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
