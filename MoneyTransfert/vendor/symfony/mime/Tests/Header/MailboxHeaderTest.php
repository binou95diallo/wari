<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Tests\Header;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Header\MailboxHeader;
use Symfony\Component\Mime\NamedAddress;

class MailboxHeaderTest extends TestCase
{
    public function testConstructor()
    {
        $header = new MailboxHeader('Sender', $address = new Address('fabien@symfony.com'));
        $this->assertEquals($address, $header->getAddress());
        $this->assertEquals($address, $header->getBody());
    }

    public function testAddress()
    {
        $header = new MailboxHeader('Sender', new Address('fabien@symfony.com'));
        $header->setBody($address = new Address('helene@symfony.com'));
        $this->assertEquals($address, $header->getAddress());
        $this->assertEquals($address, $header->getBody());
        $header->setAddress($address = new Address('thomas@symfony.com'));
        $this->assertEquals($address, $header->getAddress());
        $this->assertEquals($address, $header->getBody());
    }

    public function testgetBodyAsString()
    {
        $header = new MailboxHeader('Sender', new Address('fabien@symfony.com'));
        $this->assertEquals('fabien@symfony.com', $header->getBodyAsString());

        $header->setAddress(new Address('fabien@sïmfony.com'));
        $this->assertEquals('fabien@xn--smfony-iwa.com', $header->getBodyAsString());

        $header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien Potencier'));
        $this->assertEquals('Fabien Potencier <fabien@symfony.com>', $header->getBodyAsString());

        $header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien Potencier, "from Symfony"'));
        $this->assertEquals('"Fabien Potencier, \"from Symfony\"" <fabien@symfony.com>', $header->getBodyAsString());

        $header = new MailboxHeader('From', new NamedAddress('fabien@symfony.com', 'Fabien Potencier, \\escaped\\'));
        $this->assertEquals('"Fabien Potencier, \\\\escaped\\\\" <fabien@symfony.com>', $header->getBodyAsString());

        $name = 'P'.pack('C', 0x8F).'tencier';
        $header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien '.$name));
        $header->setCharset('iso-8859-1');
        $this->assertEquals('Fabien =?'.$header->getCharset().'?Q?P=8Ftencier?= <fabien@symfony.com>', $header->getBodyAsString());
    }

    /**
     * @expectedException \Symfony\Component\Mime\Exception\AddressEncoderException
     */
    public function testUtf8CharsInLocalPartThrows()
    {
        $header = new MailboxHeader('Sender', new Address('fabïen@symfony.com'));
        $header->getBodyAsString();
    }

    public function testToString()
    {
        $header = new MailboxHeader('Sender', new Address('fabien@symfony.com'));
        $this->assertEquals('Sender: fabien@symfony.com', $header->toString());

        $header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien Potencier'));
        $this->assertEquals('Sender: Fabien Potencier <fabien@symfony.com>', $header->toString());
    }
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Tests\Header;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Header\MailboxHeader;
use Symfony\Component\Mime\NamedAddress;

class MailboxHeaderTest extends TestCase
{
    public function testConstructor()
    {
        $header = new MailboxHeader('Sender', $address = new Address('fabien@symfony.com'));
        $this->assertEquals($address, $header->getAddress());
        $this->assertEquals($address, $header->getBody());
    }

    public function testAddress()
    {
        $header = new MailboxHeader('Sender', new Address('fabien@symfony.com'));
        $header->setBody($address = new Address('helene@symfony.com'));
        $this->assertEquals($address, $header->getAddress());
        $this->assertEquals($address, $header->getBody());
        $header->setAddress($address = new Address('thomas@symfony.com'));
        $this->assertEquals($address, $header->getAddress());
        $this->assertEquals($address, $header->getBody());
    }

    public function testgetBodyAsString()
    {
        $header = new MailboxHeader('Sender', new Address('fabien@symfony.com'));
        $this->assertEquals('fabien@symfony.com', $header->getBodyAsString());

        $header->setAddress(new Address('fabien@sïmfony.com'));
        $this->assertEquals('fabien@xn--smfony-iwa.com', $header->getBodyAsString());

        $header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien Potencier'));
        $this->assertEquals('Fabien Potencier <fabien@symfony.com>', $header->getBodyAsString());

        $header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien Potencier, "from Symfony"'));
        $this->assertEquals('"Fabien Potencier, \"from Symfony\"" <fabien@symfony.com>', $header->getBodyAsString());

        $header = new MailboxHeader('From', new NamedAddress('fabien@symfony.com', 'Fabien Potencier, \\escaped\\'));
        $this->assertEquals('"Fabien Potencier, \\\\escaped\\\\" <fabien@symfony.com>', $header->getBodyAsString());

        $name = 'P'.pack('C', 0x8F).'tencier';
        $header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien '.$name));
        $header->setCharset('iso-8859-1');
        $this->assertEquals('Fabien =?'.$header->getCharset().'?Q?P=8Ftencier?= <fabien@symfony.com>', $header->getBodyAsString());
    }

    /**
     * @expectedException \Symfony\Component\Mime\Exception\AddressEncoderException
     */
    public function testUtf8CharsInLocalPartThrows()
    {
        $header = new MailboxHeader('Sender', new Address('fabïen@symfony.com'));
        $header->getBodyAsString();
    }

    public function testToString()
    {
        $header = new MailboxHeader('Sender', new Address('fabien@symfony.com'));
        $this->assertEquals('Sender: fabien@symfony.com', $header->toString());

        $header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien Potencier'));
        $this->assertEquals('Sender: Fabien Potencier <fabien@symfony.com>', $header->toString());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
