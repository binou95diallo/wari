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

namespace Symfony\Bundle\SecurityBundle\Tests\Debug;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener;
use Symfony\Bundle\SecurityBundle\Security\FirewallMap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Security\Http\Logout\LogoutUrlGenerator;
use Symfony\Component\VarDumper\Caster\ClassStub;

/**
 * @group time-sensitive
 */
class TraceableFirewallListenerTest extends TestCase
{
    public function testOnKernelRequestRecordsListeners()
    {
        $request = new Request();
        $event = new RequestEvent($this->getMockBuilder(HttpKernelInterface::class)->getMock(), $request, HttpKernelInterface::MASTER_REQUEST);
        $event->setResponse($response = new Response());
        $listener = function ($e) use ($event, &$listenerCalled) {
            $listenerCalled += $e === $event;
        };
        $firewallMap = $this
            ->getMockBuilder(FirewallMap::class)
            ->disableOriginalConstructor()
            ->getMock();
        $firewallMap
            ->expects($this->once())
            ->method('getFirewallConfig')
            ->with($request)
            ->willReturn(null);
        $firewallMap
            ->expects($this->once())
            ->method('getListeners')
            ->with($request)
            ->willReturn([[$listener], null, null]);

        $firewall = new TraceableFirewallListener($firewallMap, new EventDispatcher(), new LogoutUrlGenerator());
        $firewall->configureLogoutUrlGenerator($event);
        $firewall->onKernelRequest($event);

        $listeners = $firewall->getWrappedListeners();
        $this->assertCount(1, $listeners);
        $this->assertSame($response, $listeners[0]['response']);
        $this->assertInstanceOf(ClassStub::class, $listeners[0]['stub']);
        $this->assertSame(\get_class($listener), (string) $listeners[0]['stub']);
        $this->assertSame(1, $listenerCalled);
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

namespace Symfony\Bundle\SecurityBundle\Tests\Debug;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener;
use Symfony\Bundle\SecurityBundle\Security\FirewallMap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Security\Http\Logout\LogoutUrlGenerator;
use Symfony\Component\VarDumper\Caster\ClassStub;

/**
 * @group time-sensitive
 */
class TraceableFirewallListenerTest extends TestCase
{
    public function testOnKernelRequestRecordsListeners()
    {
        $request = new Request();
        $event = new RequestEvent($this->getMockBuilder(HttpKernelInterface::class)->getMock(), $request, HttpKernelInterface::MASTER_REQUEST);
        $event->setResponse($response = new Response());
        $listener = function ($e) use ($event, &$listenerCalled) {
            $listenerCalled += $e === $event;
        };
        $firewallMap = $this
            ->getMockBuilder(FirewallMap::class)
            ->disableOriginalConstructor()
            ->getMock();
        $firewallMap
            ->expects($this->once())
            ->method('getFirewallConfig')
            ->with($request)
            ->willReturn(null);
        $firewallMap
            ->expects($this->once())
            ->method('getListeners')
            ->with($request)
            ->willReturn([[$listener], null, null]);

        $firewall = new TraceableFirewallListener($firewallMap, new EventDispatcher(), new LogoutUrlGenerator());
        $firewall->configureLogoutUrlGenerator($event);
        $firewall->onKernelRequest($event);

        $listeners = $firewall->getWrappedListeners();
        $this->assertCount(1, $listeners);
        $this->assertSame($response, $listeners[0]['response']);
        $this->assertInstanceOf(ClassStub::class, $listeners[0]['stub']);
        $this->assertSame(\get_class($listener), (string) $listeners[0]['stub']);
        $this->assertSame(1, $listenerCalled);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
