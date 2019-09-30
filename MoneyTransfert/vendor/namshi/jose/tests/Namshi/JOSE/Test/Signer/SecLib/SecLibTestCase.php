<<<<<<< HEAD
<?php

namespace  Namshi\JOSE\Test\Signer\SecLib;

use PHPUnit_Framework_TestCase as TestCase;

class SecLibTestCase extends TestCase
{
    public function setup()
    {
        if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0) {
            $this->markTestSkipped("phpseclib 1.0.0(LTS), even the latest 2.0.0, doesn't support PHP7 yet");
        }

        parent::setUp();
    }
}
=======
<?php

namespace  Namshi\JOSE\Test\Signer\SecLib;

use PHPUnit_Framework_TestCase as TestCase;

class SecLibTestCase extends TestCase
{
    public function setup()
    {
        if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0) {
            $this->markTestSkipped("phpseclib 1.0.0(LTS), even the latest 2.0.0, doesn't support PHP7 yet");
        }

        parent::setUp();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
