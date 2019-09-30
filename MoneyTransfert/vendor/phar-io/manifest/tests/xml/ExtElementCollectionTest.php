<<<<<<< HEAD
<?php

namespace PharIo\Manifest;

use DOMDocument;

class ExtElementCollectionTest extends \PHPUnit\Framework\TestCase {
    public function testComponentElementCanBeRetrievedFromCollection() {
        $dom = new DOMDocument();
        $dom->loadXML('<?xml version="1.0" ?><ext xmlns="https://phar.io/xml/manifest/1.0" />');
        $collection = new ExtElementCollection($dom->childNodes);

        foreach($collection as $position => $extElement) {
            $this->assertInstanceOf(ExtElement::class, $extElement);
            $this->assertEquals(0, $position);
        }
    }

}
=======
<?php

namespace PharIo\Manifest;

use DOMDocument;

class ExtElementCollectionTest extends \PHPUnit\Framework\TestCase {
    public function testComponentElementCanBeRetrievedFromCollection() {
        $dom = new DOMDocument();
        $dom->loadXML('<?xml version="1.0" ?><ext xmlns="https://phar.io/xml/manifest/1.0" />');
        $collection = new ExtElementCollection($dom->childNodes);

        foreach($collection as $position => $extElement) {
            $this->assertInstanceOf(ExtElement::class, $extElement);
            $this->assertEquals(0, $position);
        }
    }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
