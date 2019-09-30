<<<<<<< HEAD
--TEST--
PHPT skip condition results in correct code location hint
--FILE--
<?php declare(strict_types=1);
print "Hello world" . \PHP_EOL;
print "This is line 2" . \PHP_EOL;
print "and this is line 3" . \PHP_EOL;
--EXPECT_EXTERNAL--
../_files/expect_external.txt
=======
--TEST--
PHPT skip condition results in correct code location hint
--FILE--
<?php declare(strict_types=1);
print "Hello world" . \PHP_EOL;
print "This is line 2" . \PHP_EOL;
print "and this is line 3" . \PHP_EOL;
--EXPECT_EXTERNAL--
../_files/expect_external.txt
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
