<<<<<<< HEAD
<?php

namespace Symfony\Component\HttpKernel\Tests\Event;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Tests\TestHttpKernel;

class ControllerArgumentsEventTest extends TestCase
{
    public function testControllerArgumentsEvent()
    {
        $filterController = new ControllerArgumentsEvent(new TestHttpKernel(), function () {}, ['test'], new Request(), 1);
        $this->assertEquals($filterController->getArguments(), ['test']);
    }
}
=======
<?php

namespace Symfony\Component\HttpKernel\Tests\Event;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Tests\TestHttpKernel;

class ControllerArgumentsEventTest extends TestCase
{
    public function testControllerArgumentsEvent()
    {
        $filterController = new ControllerArgumentsEvent(new TestHttpKernel(), function () {}, ['test'], new Request(), 1);
        $this->assertEquals($filterController->getArguments(), ['test']);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
