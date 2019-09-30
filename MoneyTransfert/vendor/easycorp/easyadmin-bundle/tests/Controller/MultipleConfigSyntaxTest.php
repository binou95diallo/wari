<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class MultipleConfigSyntaxTest extends AbstractTestCase
{
    public function testConfigurationInDifferentFiles()
    {
        $this->initClient(['environment' => 'multiple_config_syntax']);
        $backendConfig = static::$client->getContainer()->get('easyadmin.config.manager')->getBackendConfig();

        $expectedEntityNames = [
            'Product', 'Product2', 'Product3', 'Product4', 'Inventory', 'Product22', 'Product5', 'Inventory2',
        ];

        $i = 0;
        foreach ($backendConfig['entities'] as $entityName => $entityConfig) {
            $this->assertSame($expectedEntityNames[$i], $entityName);
            $this->assertSame($expectedEntityNames[$i], $entityConfig['label']);
            $this->assertSame('AppTestBundle\Entity\FunctionalTests\Product', $entityConfig['class']);

            ++$i;
        }
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class MultipleConfigSyntaxTest extends AbstractTestCase
{
    public function testConfigurationInDifferentFiles()
    {
        $this->initClient(['environment' => 'multiple_config_syntax']);
        $backendConfig = static::$client->getContainer()->get('easyadmin.config.manager')->getBackendConfig();

        $expectedEntityNames = [
            'Product', 'Product2', 'Product3', 'Product4', 'Inventory', 'Product22', 'Product5', 'Inventory2',
        ];

        $i = 0;
        foreach ($backendConfig['entities'] as $entityName => $entityConfig) {
            $this->assertSame($expectedEntityNames[$i], $entityName);
            $this->assertSame($expectedEntityNames[$i], $entityConfig['label']);
            $this->assertSame('AppTestBundle\Entity\FunctionalTests\Product', $entityConfig['class']);

            ++$i;
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
