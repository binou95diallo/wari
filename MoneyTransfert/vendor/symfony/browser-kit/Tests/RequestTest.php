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

namespace Symfony\Component\BrowserKit\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\BrowserKit\Request;

class RequestTest extends TestCase
{
    public function testGetUri()
    {
        $request = new Request('http://www.example.com/', 'get');
        $this->assertEquals('http://www.example.com/', $request->getUri(), '->getUri() returns the URI of the request');
    }

    public function testGetMethod()
    {
        $request = new Request('http://www.example.com/', 'get');
        $this->assertEquals('get', $request->getMethod(), '->getMethod() returns the method of the request');
    }

    public function testGetParameters()
    {
        $request = new Request('http://www.example.com/', 'get', ['foo' => 'bar']);
        $this->assertEquals(['foo' => 'bar'], $request->getParameters(), '->getParameters() returns the parameters of the request');
    }

    public function testGetFiles()
    {
        $request = new Request('http://www.example.com/', 'get', [], ['foo' => 'bar']);
        $this->assertEquals(['foo' => 'bar'], $request->getFiles(), '->getFiles() returns the uploaded files of the request');
    }

    public function testGetCookies()
    {
        $request = new Request('http://www.example.com/', 'get', [], [], ['foo' => 'bar']);
        $this->assertEquals(['foo' => 'bar'], $request->getCookies(), '->getCookies() returns the cookies of the request');
    }

    public function testGetServer()
    {
        $request = new Request('http://www.example.com/', 'get', [], [], [], ['foo' => 'bar']);
        $this->assertEquals(['foo' => 'bar'], $request->getServer(), '->getServer() returns the server parameters of the request');
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

namespace Symfony\Component\BrowserKit\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\BrowserKit\Request;

class RequestTest extends TestCase
{
    public function testGetUri()
    {
        $request = new Request('http://www.example.com/', 'get');
        $this->assertEquals('http://www.example.com/', $request->getUri(), '->getUri() returns the URI of the request');
    }

    public function testGetMethod()
    {
        $request = new Request('http://www.example.com/', 'get');
        $this->assertEquals('get', $request->getMethod(), '->getMethod() returns the method of the request');
    }

    public function testGetParameters()
    {
        $request = new Request('http://www.example.com/', 'get', ['foo' => 'bar']);
        $this->assertEquals(['foo' => 'bar'], $request->getParameters(), '->getParameters() returns the parameters of the request');
    }

    public function testGetFiles()
    {
        $request = new Request('http://www.example.com/', 'get', [], ['foo' => 'bar']);
        $this->assertEquals(['foo' => 'bar'], $request->getFiles(), '->getFiles() returns the uploaded files of the request');
    }

    public function testGetCookies()
    {
        $request = new Request('http://www.example.com/', 'get', [], [], ['foo' => 'bar']);
        $this->assertEquals(['foo' => 'bar'], $request->getCookies(), '->getCookies() returns the cookies of the request');
    }

    public function testGetServer()
    {
        $request = new Request('http://www.example.com/', 'get', [], [], [], ['foo' => 'bar']);
        $this->assertEquals(['foo' => 'bar'], $request->getServer(), '->getServer() returns the server parameters of the request');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
