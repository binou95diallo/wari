<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class BatchActionTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'batch_action'];

    public function testBatchActionsForm()
    {
        $crawler = $this->requestListView();

        $this->assertSame('Delete', $crawler->filter('form[name="batch_form"] button[value="delete"]')->text());

        $this->assertSame('Custom batch action', \trim($crawler->filter('form[name="batch_form"] button[value="custom_batch_action"]')->text()));
        $this->assertSame('fa fa-fw fa-custom-icon', \trim($crawler->filter('form[name="batch_form"] button[value="custom_batch_action"] i')->attr('class')));
    }

    public function testBatchActionsCheckboxes()
    {
        $crawler = $this->requestListView();

        $this->assertSame('form-batch-checkbox-all', $crawler->filter('table.datagrid thead th input[type="checkbox"]')->first()->attr('class'));

        $this->assertSame('form-batch-checkbox', $crawler->filter('table.datagrid tbody td input[type="checkbox"]')->first()->attr('class'));
        $this->assertSame('200', $crawler->filter('table.datagrid tbody td input[type="checkbox"]')->first()->attr('value'));
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class BatchActionTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'batch_action'];

    public function testBatchActionsForm()
    {
        $crawler = $this->requestListView();

        $this->assertSame('Delete', $crawler->filter('form[name="batch_form"] button[value="delete"]')->text());

        $this->assertSame('Custom batch action', \trim($crawler->filter('form[name="batch_form"] button[value="custom_batch_action"]')->text()));
        $this->assertSame('fa fa-fw fa-custom-icon', \trim($crawler->filter('form[name="batch_form"] button[value="custom_batch_action"] i')->attr('class')));
    }

    public function testBatchActionsCheckboxes()
    {
        $crawler = $this->requestListView();

        $this->assertSame('form-batch-checkbox-all', $crawler->filter('table.datagrid thead th input[type="checkbox"]')->first()->attr('class'));

        $this->assertSame('form-batch-checkbox', $crawler->filter('table.datagrid tbody td input[type="checkbox"]')->first()->attr('class'));
        $this->assertSame('200', $crawler->filter('table.datagrid tbody td input[type="checkbox"]')->first()->attr('value'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
