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

namespace Symfony\Component\Security\Http\Tests\Logout;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Logout\SessionLogoutHandler;

class SessionLogoutHandlerTest extends TestCase
{
    public function testLogout()
    {
        $handler = new SessionLogoutHandler();

        $request = $this->getMockBuilder('Symfony\Component\HttpFoundation\Request')->getMock();
        $response = new Response();
        $session = $this->getMockBuilder('Symfony\Component\HttpFoundation\Session\Session')->disableOriginalConstructor()->getMock();

        $request
            ->expects($this->once())
            ->method('getSession')
            ->willReturn($session)
        ;

        $session
            ->expects($this->once())
            ->method('invalidate')
        ;

        $handler->logout($request, $response, $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\Token\TokenInterface')->getMock());
    }
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

namespace Symfony\Component\Security\Http\Tests\Logout;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Logout\SessionLogoutHandler;

class SessionLogoutHandlerTest extends TestCase
{
    public function testLogout()
    {
        $handler = new SessionLogoutHandler();

        $request = $this->getMockBuilder('Symfony\Component\HttpFoundation\Request')->getMock();
        $response = new Response();
        $session = $this->getMockBuilder('Symfony\Component\HttpFoundation\Session\Session')->disableOriginalConstructor()->getMock();

        $request
            ->expects($this->once())
            ->method('getSession')
            ->willReturn($session)
        ;

        $session
            ->expects($this->once())
            ->method('invalidate')
        ;

        $handler->logout($request, $response, $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\Token\TokenInterface')->getMock());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
