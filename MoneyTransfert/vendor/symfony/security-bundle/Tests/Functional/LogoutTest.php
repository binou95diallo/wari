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

namespace Symfony\Bundle\SecurityBundle\Tests\Functional;

class LogoutTest extends WebTestCase
{
    public function testSessionLessRememberMeLogout()
    {
        $client = $this->createClient(['test_case' => 'RememberMeLogout', 'root_config' => 'config.yml']);

        $client->request('POST', '/login', [
            '_username' => 'johannes',
            '_password' => 'test',
        ]);

        $cookieJar = $client->getCookieJar();
        $cookieJar->expire(session_name());

        $this->assertNotNull($cookieJar->get('REMEMBERME'));
        $this->assertSame('lax', $cookieJar->get('REMEMBERME')->getSameSite());

        $client->request('GET', '/logout');

        $this->assertNull($cookieJar->get('REMEMBERME'));
    }

    public function testCsrfTokensAreClearedOnLogout()
    {
        $client = $this->createClient(['test_case' => 'LogoutWithoutSessionInvalidation', 'root_config' => 'config.yml']);
        static::$container->get('security.csrf.token_storage')->setToken('foo', 'bar');

        $client->request('POST', '/login', [
            '_username' => 'johannes',
            '_password' => 'test',
        ]);

        $this->assertTrue(static::$container->get('security.csrf.token_storage')->hasToken('foo'));
        $this->assertSame('bar', static::$container->get('security.csrf.token_storage')->getToken('foo'));

        $client->request('GET', '/logout');

        $this->assertFalse(static::$container->get('security.csrf.token_storage')->hasToken('foo'));
    }

    public function testAccessControlDoesNotApplyOnLogout()
    {
        $client = $this->createClient(['test_case' => 'LogoutAccess', 'root_config' => 'config.yml']);

        $client->request('POST', '/login', ['_username' => 'johannes', '_password' => 'test']);
        $client->request('GET', '/logout');

        $this->assertRedirect($client->getResponse(), '/');
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

namespace Symfony\Bundle\SecurityBundle\Tests\Functional;

class LogoutTest extends WebTestCase
{
    public function testSessionLessRememberMeLogout()
    {
        $client = $this->createClient(['test_case' => 'RememberMeLogout', 'root_config' => 'config.yml']);

        $client->request('POST', '/login', [
            '_username' => 'johannes',
            '_password' => 'test',
        ]);

        $cookieJar = $client->getCookieJar();
        $cookieJar->expire(session_name());

        $this->assertNotNull($cookieJar->get('REMEMBERME'));
        $this->assertSame('lax', $cookieJar->get('REMEMBERME')->getSameSite());

        $client->request('GET', '/logout');

        $this->assertNull($cookieJar->get('REMEMBERME'));
    }

    public function testCsrfTokensAreClearedOnLogout()
    {
        $client = $this->createClient(['test_case' => 'LogoutWithoutSessionInvalidation', 'root_config' => 'config.yml']);
        static::$container->get('security.csrf.token_storage')->setToken('foo', 'bar');

        $client->request('POST', '/login', [
            '_username' => 'johannes',
            '_password' => 'test',
        ]);

        $this->assertTrue(static::$container->get('security.csrf.token_storage')->hasToken('foo'));
        $this->assertSame('bar', static::$container->get('security.csrf.token_storage')->getToken('foo'));

        $client->request('GET', '/logout');

        $this->assertFalse(static::$container->get('security.csrf.token_storage')->hasToken('foo'));
    }

    public function testAccessControlDoesNotApplyOnLogout()
    {
        $client = $this->createClient(['test_case' => 'LogoutAccess', 'root_config' => 'config.yml']);

        $client->request('POST', '/login', ['_username' => 'johannes', '_password' => 'test']);
        $client->request('GET', '/logout');

        $this->assertRedirect($client->getResponse(), '/');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
