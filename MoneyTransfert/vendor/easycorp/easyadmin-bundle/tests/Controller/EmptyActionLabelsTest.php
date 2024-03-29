<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class EmptyActionLabelsTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'empty_action_labels'];

    public function testBuiltInActionLabels()
    {
        $crawler = $this->requestListView();

        // edit action
        $this->assertSame('', \trim($crawler->filter('#main table tr:first-child td.actions a')->eq(0)->text()));
        $this->assertSame('fa fa-fw fa-pencil', \trim($crawler->filter('#main table tr:first-child td.actions a i')->eq(0)->attr('class')));

        // delete action
        $this->assertSame('', \trim($crawler->filter('#main table tr:first-child td.actions a')->eq(1)->text()));
        $this->assertSame('fa fa-fw fa-minus-circle', \trim($crawler->filter('#main table tr:first-child td.actions a i')->eq(1)->attr('class')));
    }

    public function testCustomActionLabels()
    {
        $crawler = $this->requestListView();

        // custom action 1
        $this->assertSame('', \trim($crawler->filter('#main table tr:first-child td.actions a')->eq(2)->text()));
        $this->assertSame('fa fa-fw fa-icon1', \trim($crawler->filter('#main table tr:first-child td.actions a i')->eq(2)->attr('class')));

        // custom action 2
        $this->assertSame('', \trim($crawler->filter('#main table tr:first-child td.actions a')->eq(3)->text()));
        $this->assertSame('fa fa-fw fa-icon2', \trim($crawler->filter('#main table tr:first-child td.actions a i')->eq(3)->attr('class')));
    }

    public function testFalseActionLabels()
    {
        $crawler = $this->requestListView();

        // custom action with 'false' label used as a string instead of a boolean
        $this->assertSame('false', \trim($crawler->filter('#main table tr:first-child td.actions a')->eq(4)->text()));
        $this->assertSame('fa fa-fw fa-icon3', \trim($crawler->filter('#main table tr:first-child td.actions a i')->eq(4)->attr('class')));
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class EmptyActionLabelsTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'empty_action_labels'];

    public function testBuiltInActionLabels()
    {
        $crawler = $this->requestListView();

        // edit action
        $this->assertSame('', \trim($crawler->filter('#main table tr:first-child td.actions a')->eq(0)->text()));
        $this->assertSame('fa fa-fw fa-pencil', \trim($crawler->filter('#main table tr:first-child td.actions a i')->eq(0)->attr('class')));

        // delete action
        $this->assertSame('', \trim($crawler->filter('#main table tr:first-child td.actions a')->eq(1)->text()));
        $this->assertSame('fa fa-fw fa-minus-circle', \trim($crawler->filter('#main table tr:first-child td.actions a i')->eq(1)->attr('class')));
    }

    public function testCustomActionLabels()
    {
        $crawler = $this->requestListView();

        // custom action 1
        $this->assertSame('', \trim($crawler->filter('#main table tr:first-child td.actions a')->eq(2)->text()));
        $this->assertSame('fa fa-fw fa-icon1', \trim($crawler->filter('#main table tr:first-child td.actions a i')->eq(2)->attr('class')));

        // custom action 2
        $this->assertSame('', \trim($crawler->filter('#main table tr:first-child td.actions a')->eq(3)->text()));
        $this->assertSame('fa fa-fw fa-icon2', \trim($crawler->filter('#main table tr:first-child td.actions a i')->eq(3)->attr('class')));
    }

    public function testFalseActionLabels()
    {
        $crawler = $this->requestListView();

        // custom action with 'false' label used as a string instead of a boolean
        $this->assertSame('false', \trim($crawler->filter('#main table tr:first-child td.actions a')->eq(4)->text()));
        $this->assertSame('fa fa-fw fa-icon3', \trim($crawler->filter('#main table tr:first-child td.actions a i')->eq(4)->attr('class')));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
