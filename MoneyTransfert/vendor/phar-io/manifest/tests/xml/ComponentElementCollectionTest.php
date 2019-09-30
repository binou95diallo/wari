<<<<<<< HEAD
<?php

namespace PharIo\Manifest;

use DOMDocument;

class ComponentElementCollectionTest extends \PHPUnit\Framework\TestCase {
    public function testComponentElementCanBeRetrievedFromCollection() {
        $dom = new DOMDocument();
        $dom->loadXML('<?xml version="1.0" ?><component xmlns="https://phar.io/xml/manifest/1.0" />');
        $collection = new ComponentElementCollection($dom->childNodes);

        foreach($collection as $componentElement) {
            $this->assertInstanceOf(ComponentElement::class, $componentElement);
        }
    }

}
=======
<?php

namespace PharIo\Manifest;

use DOMDocument;

class ComponentElementCollectionTest extends \PHPUnit\Framework\TestCase {
    public function testComponentElementCanBeRetrievedFromCollection() {
        $dom = new DOMDocument();
        $dom->loadXML('<?xml version="1.0" ?><component xmlns="https://phar.io/xml/manifest/1.0" />');
        $collection = new ComponentElementCollection($dom->childNodes);

        foreach($collection as $componentElement) {
            $this->assertInstanceOf(ComponentElement::class, $componentElement);
        }
    }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
