<<<<<<< HEAD
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

use PHPUnit\Framework\TestCase;

/**
 * @covers \TheSeer\Tokenizer\Tokenizer
 */
class TokenizerTest extends TestCase {

    public function testValidSourceGetsParsed() {
        $tokenizer = new Tokenizer();
        $result = $tokenizer->parse(file_get_contents(__DIR__ . '/_files/test.php'));

        $expected = unserialize(
            file_get_contents(__DIR__ . '/_files/test.php.tokens'),
            [TokenCollection::class]
        );
        $this->assertEquals($expected, $result);
    }
}
=======
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

use PHPUnit\Framework\TestCase;

/**
 * @covers \TheSeer\Tokenizer\Tokenizer
 */
class TokenizerTest extends TestCase {

    public function testValidSourceGetsParsed() {
        $tokenizer = new Tokenizer();
        $result = $tokenizer->parse(file_get_contents(__DIR__ . '/_files/test.php'));

        $expected = unserialize(
            file_get_contents(__DIR__ . '/_files/test.php.tokens'),
            [TokenCollection::class]
        );
        $this->assertEquals($expected, $result);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
