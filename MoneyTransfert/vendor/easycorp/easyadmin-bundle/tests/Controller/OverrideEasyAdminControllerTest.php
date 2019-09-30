<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class OverrideEasyAdminControllerTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'override_controller'];

    public function testLayoutIsOverridden()
    {
        $crawler = static::$client->request('GET', '/override_layout');

        $this->assertSame(200, static::$client->getResponse()->getStatusCode());
        $this->assertSame('Layout is overridden.', \trim($crawler->filter('#main')->text()));
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class OverrideEasyAdminControllerTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'override_controller'];

    public function testLayoutIsOverridden()
    {
        $crawler = static::$client->request('GET', '/override_layout');

        $this->assertSame(200, static::$client->getResponse()->getStatusCode());
        $this->assertSame('Layout is overridden.', \trim($crawler->filter('#main')->text()));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
