<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class InternationalizationTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'internationalization'];

    public function testLanguageDefinedByLayout()
    {
        $crawler = $this->getBackendHomepage();

        $this->assertSame('fr', \trim($crawler->filter('html')->attr('lang')));
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class InternationalizationTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'internationalization'];

    public function testLanguageDefinedByLayout()
    {
        $crawler = $this->getBackendHomepage();

        $this->assertSame('fr', \trim($crawler->filter('html')->attr('lang')));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
