<<<<<<< HEAD
<?php

namespace PharIo\Manifest;

class ComponentElementTest extends \PHPUnit\Framework\TestCase {
    /**
     * @var ComponentElement
     */
    private $component;

    protected function setUp() {
        $dom = new \DOMDocument();
        $dom->loadXML('<?xml version="1.0" ?><component xmlns="https://phar.io/xml/manifest/1.0" name="phar-io/phive" version="0.6.0" />');
        $this->component = new ComponentElement($dom->documentElement);
    }

    public function testNameCanBeRetrieved() {
        $this->assertEquals('phar-io/phive', $this->component->getName());
    }

    public function testEmailCanBeRetrieved() {
        $this->assertEquals('0.6.0', $this->component->getVersion());
    }

}
=======
<?php

namespace PharIo\Manifest;

class ComponentElementTest extends \PHPUnit\Framework\TestCase {
    /**
     * @var ComponentElement
     */
    private $component;

    protected function setUp() {
        $dom = new \DOMDocument();
        $dom->loadXML('<?xml version="1.0" ?><component xmlns="https://phar.io/xml/manifest/1.0" name="phar-io/phive" version="0.6.0" />');
        $this->component = new ComponentElement($dom->documentElement);
    }

    public function testNameCanBeRetrieved() {
        $this->assertEquals('phar-io/phive', $this->component->getName());
    }

    public function testEmailCanBeRetrieved() {
        $this->assertEquals('0.6.0', $this->component->getVersion());
    }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
