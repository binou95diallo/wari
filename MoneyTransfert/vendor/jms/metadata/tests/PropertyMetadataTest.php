<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Metadata\Tests;

use Metadata\PropertyMetadata;
use PHPUnit\Framework\TestCase;

class PropertyMetadataTest extends TestCase
{
    public function testConstructor()
    {
        $metadata = new PropertyMetadata('Metadata\Tests\Fixtures\TestObject', 'foo');
        $this->assertEquals('Metadata\Tests\Fixtures\TestObject', $metadata->class);
        $this->assertEquals('foo', $metadata->name);
    }

    public function testSerializeUnserialize()
    {
        $metadata = new PropertyMetadata('Metadata\Tests\Fixtures\TestObject', 'foo');

        $this->assertEquals($metadata, unserialize(serialize($metadata)));
    }
}
=======
<?php

declare(strict_types=1);

namespace Metadata\Tests;

use Metadata\PropertyMetadata;
use PHPUnit\Framework\TestCase;

class PropertyMetadataTest extends TestCase
{
    public function testConstructor()
    {
        $metadata = new PropertyMetadata('Metadata\Tests\Fixtures\TestObject', 'foo');
        $this->assertEquals('Metadata\Tests\Fixtures\TestObject', $metadata->class);
        $this->assertEquals('foo', $metadata->name);
    }

    public function testSerializeUnserialize()
    {
        $metadata = new PropertyMetadata('Metadata\Tests\Fixtures\TestObject', 'foo');

        $this->assertEquals($metadata, unserialize(serialize($metadata)));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
