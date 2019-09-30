<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class EntitySortingByAssociationTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'entity_sorting_by_association'];

    public function testListViewSorting()
    {
        $crawler = $this->requestListView();

        $this->assertContains('sorted', $crawler->filter('th:contains("Parent")')->attr('class'));
        $this->assertContains('fa-arrow-down', $crawler->filter('th:contains("Parent") i')->attr('class'));
    }

    public function testSearchViewSorting()
    {
        $crawler = $this->requestSearchView();

        $this->assertContains('sorted', $crawler->filter('th:contains("Parent")')->attr('class'));
        $this->assertContains('fa-arrow-up', $crawler->filter('th:contains("Parent") i')->attr('class'));
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class EntitySortingByAssociationTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'entity_sorting_by_association'];

    public function testListViewSorting()
    {
        $crawler = $this->requestListView();

        $this->assertContains('sorted', $crawler->filter('th:contains("Parent")')->attr('class'));
        $this->assertContains('fa-arrow-down', $crawler->filter('th:contains("Parent") i')->attr('class'));
    }

    public function testSearchViewSorting()
    {
        $crawler = $this->requestSearchView();

        $this->assertContains('sorted', $crawler->filter('th:contains("Parent")')->attr('class'));
        $this->assertContains('fa-arrow-up', $crawler->filter('th:contains("Parent") i')->attr('class'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
