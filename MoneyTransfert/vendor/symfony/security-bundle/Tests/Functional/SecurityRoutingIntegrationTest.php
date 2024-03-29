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

class SecurityRoutingIntegrationTest extends WebTestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testRoutingErrorIsNotExposedForProtectedResourceWhenAnonymous($config)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config]);
        $client->request('GET', '/protected_resource');

        $this->assertRedirect($client->getResponse(), '/login');
    }

    /**
     * @dataProvider getConfigs
     */
    public function testRoutingErrorIsExposedWhenNotProtected($config)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config]);
        $client->request('GET', '/unprotected_resource');

        $this->assertEquals(404, $client->getResponse()->getStatusCode(), (string) $client->getResponse());
    }

    /**
     * @dataProvider getConfigs
     */
    public function testRoutingErrorIsNotExposedForProtectedResourceWhenLoggedInWithInsufficientRights($config)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config]);

        $form = $client->request('GET', '/login')->selectButton('login')->form();
        $form['_username'] = 'johannes';
        $form['_password'] = 'test';
        $client->submit($form);

        $client->request('GET', '/highly_protected_resource');

        $this->assertNotEquals(404, $client->getResponse()->getStatusCode());
    }

    /**
     * @dataProvider getConfigs
     */
    public function testSecurityConfigurationForSingleIPAddress($config)
    {
        $allowedClient = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['REMOTE_ADDR' => '10.10.10.10']);
        $barredClient = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['REMOTE_ADDR' => '10.10.20.10']);

        $this->assertAllowed($allowedClient, '/secured-by-one-ip');
        $this->assertRestricted($barredClient, '/secured-by-one-ip');
    }

    /**
     * @dataProvider getConfigs
     */
    public function testSecurityConfigurationForMultipleIPAddresses($config)
    {
        $allowedClientA = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['REMOTE_ADDR' => '1.1.1.1']);
        $allowedClientB = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['REMOTE_ADDR' => '2.2.2.2']);
        $allowedClientC = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['REMOTE_ADDR' => '203.0.113.0']);
        $barredClient = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['REMOTE_ADDR' => '192.168.1.1']);

        $this->assertAllowed($allowedClientA, '/secured-by-two-ips');
        $this->assertAllowed($allowedClientB, '/secured-by-two-ips');

        $this->assertRestricted($allowedClientA, '/secured-by-one-real-ip');
        $this->assertRestricted($allowedClientA, '/secured-by-one-real-ipv6');
        $this->assertAllowed($allowedClientC, '/secured-by-one-real-ip-with-mask');

        $this->assertRestricted($barredClient, '/secured-by-two-ips');
    }

    /**
     * @dataProvider getConfigs
     */
    public function testSecurityConfigurationForExpression($config)
    {
        $allowedClient = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['HTTP_USER_AGENT' => 'Firefox 1.0']);
        $this->assertAllowed($allowedClient, '/protected-via-expression');

        $barredClient = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], []);
        $this->assertRestricted($barredClient, '/protected-via-expression');

        $allowedClient = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], []);

        $allowedClient->request('GET', '/protected-via-expression');
        $form = $allowedClient->followRedirect()->selectButton('login')->form();
        $form['_username'] = 'johannes';
        $form['_password'] = 'test';
        $allowedClient->submit($form);
        $this->assertRedirect($allowedClient->getResponse(), '/protected-via-expression');
        $this->assertAllowed($allowedClient, '/protected-via-expression');
    }

    public function testInvalidIpsInAccessControl()
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('The given value "256.357.458.559" in the "security.access_control" config option is not a valid IP address.');

        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'invalid_ip_access_control.yml']);
        $client->request('GET', '/unprotected_resource');
    }

    private function assertAllowed($client, $path)
    {
        $client->request('GET', $path);
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    private function assertRestricted($client, $path)
    {
        $client->request('GET', $path);
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function getConfigs()
    {
        return [['config.yml'], ['routes_as_path.yml']];
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

class SecurityRoutingIntegrationTest extends WebTestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testRoutingErrorIsNotExposedForProtectedResourceWhenAnonymous($config)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config]);
        $client->request('GET', '/protected_resource');

        $this->assertRedirect($client->getResponse(), '/login');
    }

    /**
     * @dataProvider getConfigs
     */
    public function testRoutingErrorIsExposedWhenNotProtected($config)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config]);
        $client->request('GET', '/unprotected_resource');

        $this->assertEquals(404, $client->getResponse()->getStatusCode(), (string) $client->getResponse());
    }

    /**
     * @dataProvider getConfigs
     */
    public function testRoutingErrorIsNotExposedForProtectedResourceWhenLoggedInWithInsufficientRights($config)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config]);

        $form = $client->request('GET', '/login')->selectButton('login')->form();
        $form['_username'] = 'johannes';
        $form['_password'] = 'test';
        $client->submit($form);

        $client->request('GET', '/highly_protected_resource');

        $this->assertNotEquals(404, $client->getResponse()->getStatusCode());
    }

    /**
     * @dataProvider getConfigs
     */
    public function testSecurityConfigurationForSingleIPAddress($config)
    {
        $allowedClient = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['REMOTE_ADDR' => '10.10.10.10']);
        $barredClient = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['REMOTE_ADDR' => '10.10.20.10']);

        $this->assertAllowed($allowedClient, '/secured-by-one-ip');
        $this->assertRestricted($barredClient, '/secured-by-one-ip');
    }

    /**
     * @dataProvider getConfigs
     */
    public function testSecurityConfigurationForMultipleIPAddresses($config)
    {
        $allowedClientA = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['REMOTE_ADDR' => '1.1.1.1']);
        $allowedClientB = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['REMOTE_ADDR' => '2.2.2.2']);
        $allowedClientC = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['REMOTE_ADDR' => '203.0.113.0']);
        $barredClient = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['REMOTE_ADDR' => '192.168.1.1']);

        $this->assertAllowed($allowedClientA, '/secured-by-two-ips');
        $this->assertAllowed($allowedClientB, '/secured-by-two-ips');

        $this->assertRestricted($allowedClientA, '/secured-by-one-real-ip');
        $this->assertRestricted($allowedClientA, '/secured-by-one-real-ipv6');
        $this->assertAllowed($allowedClientC, '/secured-by-one-real-ip-with-mask');

        $this->assertRestricted($barredClient, '/secured-by-two-ips');
    }

    /**
     * @dataProvider getConfigs
     */
    public function testSecurityConfigurationForExpression($config)
    {
        $allowedClient = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], ['HTTP_USER_AGENT' => 'Firefox 1.0']);
        $this->assertAllowed($allowedClient, '/protected-via-expression');

        $barredClient = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], []);
        $this->assertRestricted($barredClient, '/protected-via-expression');

        $allowedClient = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => $config], []);

        $allowedClient->request('GET', '/protected-via-expression');
        $form = $allowedClient->followRedirect()->selectButton('login')->form();
        $form['_username'] = 'johannes';
        $form['_password'] = 'test';
        $allowedClient->submit($form);
        $this->assertRedirect($allowedClient->getResponse(), '/protected-via-expression');
        $this->assertAllowed($allowedClient, '/protected-via-expression');
    }

    public function testInvalidIpsInAccessControl()
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('The given value "256.357.458.559" in the "security.access_control" config option is not a valid IP address.');

        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'invalid_ip_access_control.yml']);
        $client->request('GET', '/unprotected_resource');
    }

    private function assertAllowed($client, $path)
    {
        $client->request('GET', $path);
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    private function assertRestricted($client, $path)
    {
        $client->request('GET', $path);
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function getConfigs()
    {
        return [['config.yml'], ['routes_as_path.yml']];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
