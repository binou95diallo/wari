<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class RtlTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'rtl'];

    public function testRtlAutodetection()
    {
        $this->getBackendHomepage();

        $backendConfig = static::$client->getContainer()->get('easyadmin.config.manager')->getBackendConfig();
        $this->assertTrue($backendConfig['design']['rtl'], 'RTL is enabled automatically for the "ar" locale.');
    }

    public function testRtlWebAssets()
    {
        $crawler = $this->getBackendHomepage();

        $this->assertSame(
            '/bundles/easyadmin/app.css',
            $crawler->filter('link[rel="stylesheet"]')->eq(0)->attr('href')
        );

        $this->assertSame(
            '/bundles/easyadmin/app-rtl.css',
            $crawler->filter('link[rel="stylesheet"]')->eq(1)->attr('href')
        );
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class RtlTest extends AbstractTestCase
{
    protected static $options = ['environment' => 'rtl'];

    public function testRtlAutodetection()
    {
        $this->getBackendHomepage();

        $backendConfig = static::$client->getContainer()->get('easyadmin.config.manager')->getBackendConfig();
        $this->assertTrue($backendConfig['design']['rtl'], 'RTL is enabled automatically for the "ar" locale.');
    }

    public function testRtlWebAssets()
    {
        $crawler = $this->getBackendHomepage();

        $this->assertSame(
            '/bundles/easyadmin/app.css',
            $crawler->filter('link[rel="stylesheet"]')->eq(0)->attr('href')
        );

        $this->assertSame(
            '/bundles/easyadmin/app-rtl.css',
            $crawler->filter('link[rel="stylesheet"]')->eq(1)->attr('href')
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
