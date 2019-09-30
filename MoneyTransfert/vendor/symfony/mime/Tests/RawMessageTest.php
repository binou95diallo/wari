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

namespace Symfony\Component\Mime\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Mime\RawMessage;

class RawMessageTest extends TestCase
{
    public function testToString()
    {
        $message = new RawMessage('string');
        $this->assertEquals('string', $message->toString());
        $this->assertEquals('string', implode('', iterator_to_array($message->toIterable())));
        // calling methods more than once work
        $this->assertEquals('string', $message->toString());
        $this->assertEquals('string', implode('', iterator_to_array($message->toIterable())));

        $message = new RawMessage(new \ArrayObject(['some', ' ', 'string']));
        $this->assertEquals('some string', $message->toString());
        $this->assertEquals('some string', implode('', iterator_to_array($message->toIterable())));
        // calling methods more than once work
        $this->assertEquals('some string', $message->toString());
        $this->assertEquals('some string', implode('', iterator_to_array($message->toIterable())));
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

namespace Symfony\Component\Mime\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Mime\RawMessage;

class RawMessageTest extends TestCase
{
    public function testToString()
    {
        $message = new RawMessage('string');
        $this->assertEquals('string', $message->toString());
        $this->assertEquals('string', implode('', iterator_to_array($message->toIterable())));
        // calling methods more than once work
        $this->assertEquals('string', $message->toString());
        $this->assertEquals('string', implode('', iterator_to_array($message->toIterable())));

        $message = new RawMessage(new \ArrayObject(['some', ' ', 'string']));
        $this->assertEquals('some string', $message->toString());
        $this->assertEquals('some string', implode('', iterator_to_array($message->toIterable())));
        // calling methods more than once work
        $this->assertEquals('some string', $message->toString());
        $this->assertEquals('some string', implode('', iterator_to_array($message->toIterable())));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
