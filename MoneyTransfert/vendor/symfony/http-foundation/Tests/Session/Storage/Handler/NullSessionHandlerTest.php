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

namespace Symfony\Component\HttpFoundation\Tests\Session\Storage\Handler;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NullSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

/**
 * Test class for NullSessionHandler.
 *
 * @author Drak <drak@zikula.org>
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class NullSessionHandlerTest extends TestCase
{
    public function testSaveHandlers()
    {
        $storage = $this->getStorage();
        $this->assertEquals('user', ini_get('session.save_handler'));
    }

    public function testSession()
    {
        session_id('nullsessionstorage');
        $storage = $this->getStorage();
        $session = new Session($storage);
        $this->assertNull($session->get('something'));
        $session->set('something', 'unique');
        $this->assertEquals('unique', $session->get('something'));
    }

    public function testNothingIsPersisted()
    {
        session_id('nullsessionstorage');
        $storage = $this->getStorage();
        $session = new Session($storage);
        $session->start();
        $this->assertEquals('nullsessionstorage', $session->getId());
        $this->assertNull($session->get('something'));
    }

    public function getStorage()
    {
        return new NativeSessionStorage([], new NullSessionHandler());
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

namespace Symfony\Component\HttpFoundation\Tests\Session\Storage\Handler;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NullSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

/**
 * Test class for NullSessionHandler.
 *
 * @author Drak <drak@zikula.org>
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class NullSessionHandlerTest extends TestCase
{
    public function testSaveHandlers()
    {
        $storage = $this->getStorage();
        $this->assertEquals('user', ini_get('session.save_handler'));
    }

    public function testSession()
    {
        session_id('nullsessionstorage');
        $storage = $this->getStorage();
        $session = new Session($storage);
        $this->assertNull($session->get('something'));
        $session->set('something', 'unique');
        $this->assertEquals('unique', $session->get('something'));
    }

    public function testNothingIsPersisted()
    {
        session_id('nullsessionstorage');
        $storage = $this->getStorage();
        $session = new Session($storage);
        $session->start();
        $this->assertEquals('nullsessionstorage', $session->getId());
        $this->assertNull($session->get('something'));
    }

    public function getStorage()
    {
        return new NativeSessionStorage([], new NullSessionHandler());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
