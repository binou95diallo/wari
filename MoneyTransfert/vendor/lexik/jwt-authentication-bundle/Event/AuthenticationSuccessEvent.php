<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Event;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * AuthenticationSuccessEvent.
 *
 * @author Dev Lexik <dev@lexik.fr>
 */
class AuthenticationSuccessEvent extends Event
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * @var Response
     */
    protected $response;

    /**
     * @param array         $data
     * @param UserInterface $user
     * @param Response      $response
     */
    public function __construct(array $data, UserInterface $user, Response $response)
    {
        $this->data     = $data;
        $this->user     = $user;
        $this->response = $response;
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

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Event;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * AuthenticationSuccessEvent.
 *
 * @author Dev Lexik <dev@lexik.fr>
 */
class AuthenticationSuccessEvent extends Event
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * @var Response
     */
    protected $response;

    /**
     * @param array         $data
     * @param UserInterface $user
     * @param Response      $response
     */
    public function __construct(array $data, UserInterface $user, Response $response)
    {
        $this->data     = $data;
        $this->user     = $user;
        $this->response = $response;
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

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
