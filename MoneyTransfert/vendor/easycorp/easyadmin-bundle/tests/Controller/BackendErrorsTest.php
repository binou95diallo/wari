<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class BackendErrorsTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'default_backend'];

    public function testUndefinedEntityError()
    {
        $crawler = $this->getBackendPage([
            'entity' => 'InexistentEntity',
            'view' => 'list',
        ]);

        $this->assertSame(404, static::$client->getResponse()->getStatusCode());
        $this->assertContains('The "InexistentEntity" entity is not defined in the configuration of your backend.', $crawler->filter('head title')->text());
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class BackendErrorsTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'default_backend'];

    public function testUndefinedEntityError()
    {
        $crawler = $this->getBackendPage([
            'entity' => 'InexistentEntity',
            'view' => 'list',
        ]);

        $this->assertSame(404, static::$client->getResponse()->getStatusCode());
        $this->assertContains('The "InexistentEntity" entity is not defined in the configuration of your backend.', $crawler->filter('head title')->text());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
