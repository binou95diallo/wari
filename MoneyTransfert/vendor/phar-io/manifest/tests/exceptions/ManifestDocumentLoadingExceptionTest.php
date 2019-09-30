<<<<<<< HEAD
<?php

namespace PharIo\Manifest;

use DOMDocument;
use LibXMLError;

class ManifestDocumentLoadingExceptionTest extends \PHPUnit\Framework\TestCase {
    public function testXMLErrorsCanBeRetrieved() {
        $dom  = new DOMDocument();
        $prev = libxml_use_internal_errors(true);
        $dom->loadXML('<?xml version="1.0" ?><broken>');
        $exception = new ManifestDocumentLoadingException(libxml_get_errors());
        libxml_use_internal_errors($prev);

        $this->assertContainsOnlyInstancesOf(LibXMLError::class, $exception->getLibxmlErrors());
    }

}
=======
<?php

namespace PharIo\Manifest;

use DOMDocument;
use LibXMLError;

class ManifestDocumentLoadingExceptionTest extends \PHPUnit\Framework\TestCase {
    public function testXMLErrorsCanBeRetrieved() {
        $dom  = new DOMDocument();
        $prev = libxml_use_internal_errors(true);
        $dom->loadXML('<?xml version="1.0" ?><broken>');
        $exception = new ManifestDocumentLoadingException(libxml_get_errors());
        libxml_use_internal_errors($prev);

        $this->assertContainsOnlyInstancesOf(LibXMLError::class, $exception->getLibxmlErrors());
    }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
