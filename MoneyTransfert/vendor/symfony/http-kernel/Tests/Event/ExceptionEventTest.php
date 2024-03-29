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

namespace Symfony\Component\HttpKernel\Tests\Event;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Tests\TestHttpKernel;

class ExceptionEventTest extends TestCase
{
    public function testAllowSuccessfulResponseIsFalseByDefault()
    {
        $event = new ExceptionEvent(new TestHttpKernel(), new Request(), 1, new \Exception());

        $this->assertFalse($event->isAllowingCustomResponseCode());
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

namespace Symfony\Component\HttpKernel\Tests\Event;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Tests\TestHttpKernel;

class ExceptionEventTest extends TestCase
{
    public function testAllowSuccessfulResponseIsFalseByDefault()
    {
        $event = new ExceptionEvent(new TestHttpKernel(), new Request(), 1, new \Exception());

        $this->assertFalse($event->isAllowingCustomResponseCode());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
