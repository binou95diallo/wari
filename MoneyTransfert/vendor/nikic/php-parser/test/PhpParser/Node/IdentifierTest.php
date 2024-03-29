<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Node;

class IdentifierTest extends \PHPUnit\Framework\TestCase
{
    public function testToString() {
        $identifier = new Identifier('Foo');

        $this->assertSame('Foo', (string) $identifier);
        $this->assertSame('Foo', $identifier->toString());
        $this->assertSame('foo', $identifier->toLowerString());
    }

    /** @dataProvider provideTestIsSpecialClassName */
    public function testIsSpecialClassName($identifier, $expected) {
        $identifier = new Identifier($identifier);
        $this->assertSame($expected, $identifier->isSpecialClassName());
    }

    public function provideTestIsSpecialClassName() {
        return [
            ['self', true],
            ['PARENT', true],
            ['Static', true],
            ['other', false],
        ];
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Node;

class IdentifierTest extends \PHPUnit\Framework\TestCase
{
    public function testToString() {
        $identifier = new Identifier('Foo');

        $this->assertSame('Foo', (string) $identifier);
        $this->assertSame('Foo', $identifier->toString());
        $this->assertSame('foo', $identifier->toLowerString());
    }

    /** @dataProvider provideTestIsSpecialClassName */
    public function testIsSpecialClassName($identifier, $expected) {
        $identifier = new Identifier($identifier);
        $this->assertSame($expected, $identifier->isSpecialClassName());
    }

    public function provideTestIsSpecialClassName() {
        return [
            ['self', true],
            ['PARENT', true],
            ['Static', true],
            ['other', false],
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
