<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class CustomEntityControllerTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'custom_entity_controller'];

    public function testListAction()
    {
        $this->requestListView();
        $this->assertContains('Overridden list action.', static::$client->getResponse()->getContent());
    }

    public function testShowAction()
    {
        $this->requestShowView();
        $this->assertContains('Overridden show action.', static::$client->getResponse()->getContent());
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class CustomEntityControllerTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'custom_entity_controller'];

    public function testListAction()
    {
        $this->requestListView();
        $this->assertContains('Overridden list action.', static::$client->getResponse()->getContent());
    }

    public function testShowAction()
    {
        $this->requestShowView();
        $this->assertContains('Overridden show action.', static::$client->getResponse()->getContent());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
