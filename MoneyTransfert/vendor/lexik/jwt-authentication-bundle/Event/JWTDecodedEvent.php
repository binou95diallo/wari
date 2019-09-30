<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Event;

/**
 * JWTDecodedEvent.
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
class JWTDecodedEvent extends Event
{
    /**
     * @var array
     */
    protected $payload;

    /**
     * @var bool
     */
    protected $isValid;

    /**
     * @param array $payload
     */
    public function __construct(array $payload)
    {
        $this->payload = $payload;
        $this->isValid = true;
    }

    /**
     * @return array
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param array $payload
     */
    public function setPayload(array $payload)
    {
        $this->payload = $payload;
    }

    /**
     * Mark payload as invalid.
     */
    public function markAsInvalid()
    {
        $this->isValid = false;
        $this->stopPropagation();
    }

    /**
     * @return boolean
     */
    public function isValid()
    {
        return $this->isValid;
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Event;

/**
 * JWTDecodedEvent.
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
class JWTDecodedEvent extends Event
{
    /**
     * @var array
     */
    protected $payload;

    /**
     * @var bool
     */
    protected $isValid;

    /**
     * @param array $payload
     */
    public function __construct(array $payload)
    {
        $this->payload = $payload;
        $this->isValid = true;
    }

    /**
     * @return array
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param array $payload
     */
    public function setPayload(array $payload)
    {
        $this->payload = $payload;
    }

    /**
     * Mark payload as invalid.
     */
    public function markAsInvalid()
    {
        $this->isValid = false;
        $this->stopPropagation();
    }

    /**
     * @return boolean
     */
    public function isValid()
    {
        return $this->isValid;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
