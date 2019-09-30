<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Metadata\Tests;

use Metadata\ClassMetadata;
use PHPUnit\Framework\TestCase;

class ClassMetadataTest extends TestCase
{
    public function testConstructor()
    {
        $metadata = new ClassMetadata('Metadata\Tests\Fixtures\TestObject');

        $this->assertEquals('Metadata\Tests\Fixtures\TestObject', $metadata->name);
    }

    public function testSerializeUnserialize()
    {
        $metadata = new ClassMetadata('Metadata\Tests\Fixtures\TestObject');

        $this->assertEquals($metadata, unserialize(serialize($metadata)));
    }

    public function testIsFresh()
    {
        $ref = new \ReflectionClass('Metadata\Tests\Fixtures\TestObject');
        touch($ref->getFilename());
        sleep(2);

        $metadata = new ClassMetadata($ref->name);
        $metadata->fileResources[] = $ref->getFilename();
        $this->assertTrue($metadata->isFresh());

        sleep(2);
        clearstatcache(!!$ref->getFilename());
        touch($ref->getFilename());
        $this->assertFalse($metadata->isFresh());
    }
}
=======
<?php

declare(strict_types=1);

namespace Metadata\Tests;

use Metadata\ClassMetadata;
use PHPUnit\Framework\TestCase;

class ClassMetadataTest extends TestCase
{
    public function testConstructor()
    {
        $metadata = new ClassMetadata('Metadata\Tests\Fixtures\TestObject');

        $this->assertEquals('Metadata\Tests\Fixtures\TestObject', $metadata->name);
    }

    public function testSerializeUnserialize()
    {
        $metadata = new ClassMetadata('Metadata\Tests\Fixtures\TestObject');

        $this->assertEquals($metadata, unserialize(serialize($metadata)));
    }

    public function testIsFresh()
    {
        $ref = new \ReflectionClass('Metadata\Tests\Fixtures\TestObject');
        touch($ref->getFilename());
        sleep(2);

        $metadata = new ClassMetadata($ref->name);
        $metadata->fileResources[] = $ref->getFilename();
        $this->assertTrue($metadata->isFresh());

        sleep(2);
        clearstatcache(!!$ref->getFilename());
        touch($ref->getFilename());
        $this->assertFalse($metadata->isFresh());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
