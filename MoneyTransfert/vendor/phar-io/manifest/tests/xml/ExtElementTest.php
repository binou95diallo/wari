<<<<<<< HEAD
<?php

namespace PharIo\Manifest;

class ExtElementTest extends \PHPUnit\Framework\TestCase {
    /**
     * @var ExtElement
     */
    private $ext;

    protected function setUp() {
        $dom = new \DOMDocument();
        $dom->loadXML('<?xml version="1.0" ?><ext xmlns="https://phar.io/xml/manifest/1.0" name="dom" />');
        $this->ext = new ExtElement($dom->documentElement);
    }

    public function testNameCanBeRetrieved() {
        $this->assertEquals('dom', $this->ext->getName());
    }

}
=======
<?php

namespace PharIo\Manifest;

class ExtElementTest extends \PHPUnit\Framework\TestCase {
    /**
     * @var ExtElement
     */
    private $ext;

    protected function setUp() {
        $dom = new \DOMDocument();
        $dom->loadXML('<?xml version="1.0" ?><ext xmlns="https://phar.io/xml/manifest/1.0" name="dom" />');
        $this->ext = new ExtElement($dom->documentElement);
    }

    public function testNameCanBeRetrieved() {
        $this->assertEquals('dom', $this->ext->getName());
    }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
