<<<<<<< HEAD
--TEST--
PHPT skip condition results in correct code location hint
--FILE--
<?php declare(strict_types=1);
print "Nothing to see here, move along";
--SKIPIF--
<?php declare(strict_types=1);
print "skip: something terrible happened\n";
--EXPECT--
Nothing to see here, move along
=======
--TEST--
PHPT skip condition results in correct code location hint
--FILE--
<?php declare(strict_types=1);
print "Nothing to see here, move along";
--SKIPIF--
<?php declare(strict_types=1);
print "skip: something terrible happened\n";
--EXPECT--
Nothing to see here, move along
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
