<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Functional\Bundle\Controller;

use Lexik\Bundle\JWTAuthenticationBundle\Tests\Stubs\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class TestController
{
    public function securedAction(UserInterface $user)
    {
        return new JsonResponse([
            'class'    => get_class($user),
            'roles'    => $user->getRoles(),
            'username' => $user->getUsername(),
        ]);
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Functional\Bundle\Controller;

use Lexik\Bundle\JWTAuthenticationBundle\Tests\Stubs\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class TestController
{
    public function securedAction(UserInterface $user)
    {
        return new JsonResponse([
            'class'    => get_class($user),
            'roles'    => $user->getRoles(),
            'username' => $user->getUsername(),
        ]);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
