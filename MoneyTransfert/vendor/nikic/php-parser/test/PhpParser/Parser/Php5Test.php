<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Parser;

use PhpParser\Lexer;
use PhpParser\ParserTest;

class Php5Test extends ParserTest
{
    protected function getParser(Lexer $lexer) {
        return new Php5($lexer);
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Parser;

use PhpParser\Lexer;
use PhpParser\ParserTest;

class Php5Test extends ParserTest
{
    protected function getParser(Lexer $lexer) {
        return new Php5($lexer);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
