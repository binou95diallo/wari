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

namespace Symfony\Component\WebLink\Tests;

use Fig\Link\Link;
use PHPUnit\Framework\TestCase;
use Symfony\Component\WebLink\HttpHeaderSerializer;

class HttpHeaderSerializerTest extends TestCase
{
    /**
     * @var HttpHeaderSerializer
     */
    private $serializer;

    protected function setUp()
    {
        $this->serializer = new HttpHeaderSerializer();
    }

    public function testSerialize()
    {
        $links = [
            new Link('prerender', '/1'),
            (new Link('dns-prefetch', '/2'))->withAttribute('pr', 0.7),
            (new Link('preload', '/3'))->withAttribute('as', 'script')->withAttribute('nopush', false),
            (new Link('preload', '/4'))->withAttribute('as', 'image')->withAttribute('nopush', true),
            (new Link('alternate', '/5'))->withRel('next')->withAttribute('hreflang', ['fr', 'de'])->withAttribute('title', 'Hello'),
        ];

        $this->assertEquals('</1>; rel="prerender",</2>; rel="dns-prefetch"; pr="0.7",</3>; rel="preload"; as="script",</4>; rel="preload"; as="image"; nopush,</5>; rel="alternate next"; hreflang="fr"; hreflang="de"; title="Hello"', $this->serializer->serialize($links));
    }

    public function testSerializeEmpty()
    {
        $this->assertNull($this->serializer->serialize([]));
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

namespace Symfony\Component\WebLink\Tests;

use Fig\Link\Link;
use PHPUnit\Framework\TestCase;
use Symfony\Component\WebLink\HttpHeaderSerializer;

class HttpHeaderSerializerTest extends TestCase
{
    /**
     * @var HttpHeaderSerializer
     */
    private $serializer;

    protected function setUp()
    {
        $this->serializer = new HttpHeaderSerializer();
    }

    public function testSerialize()
    {
        $links = [
            new Link('prerender', '/1'),
            (new Link('dns-prefetch', '/2'))->withAttribute('pr', 0.7),
            (new Link('preload', '/3'))->withAttribute('as', 'script')->withAttribute('nopush', false),
            (new Link('preload', '/4'))->withAttribute('as', 'image')->withAttribute('nopush', true),
            (new Link('alternate', '/5'))->withRel('next')->withAttribute('hreflang', ['fr', 'de'])->withAttribute('title', 'Hello'),
        ];

        $this->assertEquals('</1>; rel="prerender",</2>; rel="dns-prefetch"; pr="0.7",</3>; rel="preload"; as="script",</4>; rel="preload"; as="image"; nopush,</5>; rel="alternate next"; hreflang="fr"; hreflang="de"; title="Hello"', $this->serializer->serialize($links));
    }

    public function testSerializeEmpty()
    {
        $this->assertNull($this->serializer->serialize([]));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
