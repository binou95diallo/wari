<<<<<<< HEAD
--TEST--
GH-1169: PHPT runner doesn't look at STDERR.
--FILE--
<?php declare(strict_types=1);
$stderr = fopen('php://stderr', 'w');
fwrite($stderr, 'PHPUnit must look at STDERR when running PHPT tests.');
--EXPECTF--
PHPUnit must look at STDERR when running PHPT tests.
=======
--TEST--
GH-1169: PHPT runner doesn't look at STDERR.
--FILE--
<?php declare(strict_types=1);
$stderr = fopen('php://stderr', 'w');
fwrite($stderr, 'PHPUnit must look at STDERR when running PHPT tests.');
--EXPECTF--
PHPUnit must look at STDERR when running PHPT tests.
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
