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

namespace Symfony\Component\HttpKernel\Tests\EventListener;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\EventListener\SaveSessionListener;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * @group legacy
 */
class SaveSessionListenerTest extends TestCase
{
    public function testOnlyTriggeredOnMasterRequest()
    {
        $listener = new SaveSessionListener();
        $event = $this->getMockBuilder(ResponseEvent::class)->disableOriginalConstructor()->getMock();
        $event->expects($this->once())->method('isMasterRequest')->willReturn(false);
        $event->expects($this->never())->method('getRequest');

        // sub request
        $listener->onKernelResponse($event);
    }

    public function testSessionSaved()
    {
        $listener = new SaveSessionListener();
        $kernel = $this->getMockBuilder(HttpKernelInterface::class)->disableOriginalConstructor()->getMock();

        $session = $this->getMockBuilder(SessionInterface::class)->disableOriginalConstructor()->getMock();
        $session->expects($this->once())->method('isStarted')->willReturn(true);
        $session->expects($this->once())->method('save');

        $request = new Request();
        $request->setSession($session);
        $response = new Response();
        $listener->onKernelResponse(new ResponseEvent($kernel, $request, HttpKernelInterface::MASTER_REQUEST, $response));
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

namespace Symfony\Component\HttpKernel\Tests\EventListener;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\EventListener\SaveSessionListener;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * @group legacy
 */
class SaveSessionListenerTest extends TestCase
{
    public function testOnlyTriggeredOnMasterRequest()
    {
        $listener = new SaveSessionListener();
        $event = $this->getMockBuilder(ResponseEvent::class)->disableOriginalConstructor()->getMock();
        $event->expects($this->once())->method('isMasterRequest')->willReturn(false);
        $event->expects($this->never())->method('getRequest');

        // sub request
        $listener->onKernelResponse($event);
    }

    public function testSessionSaved()
    {
        $listener = new SaveSessionListener();
        $kernel = $this->getMockBuilder(HttpKernelInterface::class)->disableOriginalConstructor()->getMock();

        $session = $this->getMockBuilder(SessionInterface::class)->disableOriginalConstructor()->getMock();
        $session->expects($this->once())->method('isStarted')->willReturn(true);
        $session->expects($this->once())->method('save');

        $request = new Request();
        $request->setSession($session);
        $response = new Response();
        $listener->onKernelResponse(new ResponseEvent($kernel, $request, HttpKernelInterface::MASTER_REQUEST, $response));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
