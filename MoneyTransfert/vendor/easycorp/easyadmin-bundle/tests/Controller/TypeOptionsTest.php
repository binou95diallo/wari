<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class TypeOptionsTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'type_options'];

    public function testNewViewTypeOptions()
    {
        $crawler = $this->requestNewView();

        $this->assertSame('Lorem Ipsum', $crawler->filter('#main form #category_name')->attr('value'));

        $this->assertCount(201, $crawler->filter('#main form #category_parent input[type=radio]'));
    }

    public function testEditViewTypeOptions()
    {
        $crawler = $this->requestEditView();

        $this->assertContains('col-sm-6', $crawler->filter('#main form label[for=category_name]')->attr('class'));
        $this->assertContains('col-sm-6', $crawler->filter('#main form input#category_name')->attr('class'));

        $this->assertContains('col-sm-4', $crawler->filter('#main form label[for=category_parent]')->attr('class'));
        $this->assertContains('col-sm-10', $crawler->filter('#main form select#category_parent')->attr('class'));
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class TypeOptionsTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'type_options'];

    public function testNewViewTypeOptions()
    {
        $crawler = $this->requestNewView();

        $this->assertSame('Lorem Ipsum', $crawler->filter('#main form #category_name')->attr('value'));

        $this->assertCount(201, $crawler->filter('#main form #category_parent input[type=radio]'));
    }

    public function testEditViewTypeOptions()
    {
        $crawler = $this->requestEditView();

        $this->assertContains('col-sm-6', $crawler->filter('#main form label[for=category_name]')->attr('class'));
        $this->assertContains('col-sm-6', $crawler->filter('#main form input#category_name')->attr('class'));

        $this->assertContains('col-sm-4', $crawler->filter('#main form label[for=category_parent]')->attr('class'));
        $this->assertContains('col-sm-10', $crawler->filter('#main form select#category_parent')->attr('class'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
