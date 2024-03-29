<<<<<<< HEAD
Creating JWT tokens programmatically
===================================

It might be useful in many cases to manually create a JWT token for a given user, after confirming user registration by mail for instance.
To achieve this, use the `lexik_jwt_authentication.jwt_manager` service directly:

Example with SF < Symfony 4.0 
```php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\User\UserInterface;

class ApiController extends Controller
{
    public function fooAction(UserInterface $user)
    {
        // ...

        $jwtManager = $this->container->get('lexik_jwt_authentication.jwt_manager');

        return new JsonResponse(['token' => $jwtManager->create($user)]);
    }
}
```
Example with SF > Symfony 4.0 
```php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\User\UserInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class ApiController extends Controller
{
    public function getTokenUser(UserInterface $user, JWTTokenManagerInterface $JWTManager)
    {
        // ...

        return new JsonResponse(['token' => $JWTManager->create($user)]);
    }
}
```

This dispatches the `Events::JWT_CREATED`, `Events::JWT_ENCODED` events and returns a JWT token, but the `Events::AUTHENTICATION_SUCCESS` event is not dispatched, you need to create and format the response by yourself.

For manually authenticating an user and returning the same response as your login form:

```php
public function fooAction(UserInterface $user)
{    
    $authenticationSuccessHandler = $this->container->get('lexik_jwt_authentication.handler.authentication_success');
    
    return $authenticationSuccessHandler->handleAuthenticationSuccess($user);
}
```

You can also pass an existing JWT to the `handleAuthenticationSuccess` method:

```php
$jwt = $this->container->get('lexik_jwt_authentication.jwt_manager')->create($user);

return $authenticationSuccessHandler->handleAuthenticationSuccess($user, $jwt);
```
=======
Creating JWT tokens programmatically
===================================

It might be useful in many cases to manually create a JWT token for a given user, after confirming user registration by mail for instance.
To achieve this, use the `lexik_jwt_authentication.jwt_manager` service directly:

Example with SF < Symfony 4.0 
```php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\User\UserInterface;

class ApiController extends Controller
{
    public function fooAction(UserInterface $user)
    {
        // ...

        $jwtManager = $this->container->get('lexik_jwt_authentication.jwt_manager');

        return new JsonResponse(['token' => $jwtManager->create($user)]);
    }
}
```
Example with SF > Symfony 4.0 
```php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\User\UserInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class ApiController extends Controller
{
    public function getTokenUser(UserInterface $user, JWTTokenManagerInterface $JWTManager)
    {
        // ...

        return new JsonResponse(['token' => $JWTManager->create($user)]);
    }
}
```

This dispatches the `Events::JWT_CREATED`, `Events::JWT_ENCODED` events and returns a JWT token, but the `Events::AUTHENTICATION_SUCCESS` event is not dispatched, you need to create and format the response by yourself.

For manually authenticating an user and returning the same response as your login form:

```php
public function fooAction(UserInterface $user)
{    
    $authenticationSuccessHandler = $this->container->get('lexik_jwt_authentication.handler.authentication_success');
    
    return $authenticationSuccessHandler->handleAuthenticationSuccess($user);
}
```

You can also pass an existing JWT to the `handleAuthenticationSuccess` method:

```php
$jwt = $this->container->get('lexik_jwt_authentication.jwt_manager')->create($user);

return $authenticationSuccessHandler->handleAuthenticationSuccess($user, $jwt);
```
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
