<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http\Authentication;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

/**
 * Interface for custom authentication failure handlers.
 *
 * If you want to customize the failure handling process, instead of
 * overwriting the respective listener globally, you can set a custom failure
 * handler which implements this interface.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface AuthenticationFailureHandlerInterface
{
    /**
     * This is called when an interactive authentication attempt fails. This is
     * called by authentication listeners inheriting from
     * AbstractAuthenticationListener.
     *
     * @return Response The response to return, never null
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception);
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http\Authentication;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

/**
 * Interface for custom authentication failure handlers.
 *
 * If you want to customize the failure handling process, instead of
 * overwriting the respective listener globally, you can set a custom failure
 * handler which implements this interface.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface AuthenticationFailureHandlerInterface
{
    /**
     * This is called when an interactive authentication attempt fails. This is
     * called by authentication listeners inheriting from
     * AbstractAuthenticationListener.
     *
     * @return Response The response to return, never null
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
