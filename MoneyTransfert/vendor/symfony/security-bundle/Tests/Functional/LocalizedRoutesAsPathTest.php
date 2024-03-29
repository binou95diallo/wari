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

class LocalizedRoutesAsPathTest extends WebTestCase
{
    /**
     * @dataProvider getLocales
     */
    public function testLoginLogoutProcedure($locale)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_routes.yml']);

        $crawler = $client->request('GET', '/'.$locale.'/login');
        $form = $crawler->selectButton('login')->form();
        $form['_username'] = 'johannes';
        $form['_password'] = 'test';
        $client->submit($form);

        $this->assertRedirect($client->getResponse(), '/'.$locale.'/profile');
        $this->assertEquals('Profile', $client->followRedirect()->text());

        $client->request('GET', '/'.$locale.'/logout');
        $this->assertRedirect($client->getResponse(), '/'.$locale.'/');
        $this->assertEquals('Homepage', $client->followRedirect()->text());
    }

    /**
     * @dataProvider getLocales
     */
    public function testLoginFailureWithLocalizedFailurePath($locale)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_form_failure_handler.yml']);

        $crawler = $client->request('GET', '/'.$locale.'/login');
        $form = $crawler->selectButton('login')->form();
        $form['_username'] = 'johannes';
        $form['_password'] = 'foobar';
        $client->submit($form);

        $this->assertRedirect($client->getResponse(), '/'.$locale.'/login');
    }

    /**
     * @dataProvider getLocales
     */
    public function testAccessRestrictedResource($locale)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_routes.yml']);

        $client->request('GET', '/'.$locale.'/secure/');
        $this->assertRedirect($client->getResponse(), '/'.$locale.'/login');
    }

    /**
     * @dataProvider getLocales
     */
    public function testAccessRestrictedResourceWithForward($locale)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_routes_with_forward.yml']);

        $crawler = $client->request('GET', '/'.$locale.'/secure/');
        $this->assertCount(1, $crawler->selectButton('login'), (string) $client->getResponse());
    }

    public function getLocales()
    {
        return [['en'], ['de']];
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

class LocalizedRoutesAsPathTest extends WebTestCase
{
    /**
     * @dataProvider getLocales
     */
    public function testLoginLogoutProcedure($locale)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_routes.yml']);

        $crawler = $client->request('GET', '/'.$locale.'/login');
        $form = $crawler->selectButton('login')->form();
        $form['_username'] = 'johannes';
        $form['_password'] = 'test';
        $client->submit($form);

        $this->assertRedirect($client->getResponse(), '/'.$locale.'/profile');
        $this->assertEquals('Profile', $client->followRedirect()->text());

        $client->request('GET', '/'.$locale.'/logout');
        $this->assertRedirect($client->getResponse(), '/'.$locale.'/');
        $this->assertEquals('Homepage', $client->followRedirect()->text());
    }

    /**
     * @dataProvider getLocales
     */
    public function testLoginFailureWithLocalizedFailurePath($locale)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_form_failure_handler.yml']);

        $crawler = $client->request('GET', '/'.$locale.'/login');
        $form = $crawler->selectButton('login')->form();
        $form['_username'] = 'johannes';
        $form['_password'] = 'foobar';
        $client->submit($form);

        $this->assertRedirect($client->getResponse(), '/'.$locale.'/login');
    }

    /**
     * @dataProvider getLocales
     */
    public function testAccessRestrictedResource($locale)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_routes.yml']);

        $client->request('GET', '/'.$locale.'/secure/');
        $this->assertRedirect($client->getResponse(), '/'.$locale.'/login');
    }

    /**
     * @dataProvider getLocales
     */
    public function testAccessRestrictedResourceWithForward($locale)
    {
        $client = $this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_routes_with_forward.yml']);

        $crawler = $client->request('GET', '/'.$locale.'/secure/');
        $this->assertCount(1, $crawler->selectButton('login'), (string) $client->getResponse());
    }

    public function getLocales()
    {
        return [['en'], ['de']];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
