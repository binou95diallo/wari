<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Event;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * JWTCreatedEvent.
 */
class JWTCreatedEvent extends Event
{
    /**
     * @var array
     */
    protected $header;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * @param array         $data
     * @param UserInterface $user
     * @param array         $header
     */
    public function __construct(array $data, UserInterface $user, array $header = [])
    {
        $this->data   = $data;
        $this->user   = $user;
        $this->header = $header;
    }

    /**
     * @return array
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param array $header
     */
    public function setHeader(array $header)
    {
        $this->header = $header;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Event;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * JWTCreatedEvent.
 */
class JWTCreatedEvent extends Event
{
    /**
     * @var array
     */
    protected $header;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * @param array         $data
     * @param UserInterface $user
     * @param array         $header
     */
    public function __construct(array $data, UserInterface $user, array $header = [])
    {
        $this->data   = $data;
        $this->user   = $user;
        $this->header = $header;
    }

    /**
     * @return array
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param array $header
     */
    public function setHeader(array $header)
    {
        $this->header = $header;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
