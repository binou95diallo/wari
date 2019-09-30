<<<<<<< HEAD
--TEST--
PHPT runner supports STDIN section
--STDIN--
Hello World
--FILE--
<?php declare(strict_types=1);
$input = \file_get_contents('php://stdin');
print $input;
--EXPECT--
Hello World
=======
--TEST--
PHPT runner supports STDIN section
--STDIN--
Hello World
--FILE--
<?php declare(strict_types=1);
$input = \file_get_contents('php://stdin');
print $input;
--EXPECT--
Hello World
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
