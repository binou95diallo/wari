<<<<<<< HEAD
--TEST--
phpunit NothingTest ../../_files/NothingTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'NothingTest';
$_SERVER['argv'][3] = __DIR__ . '/../_files/NothingTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

R                                                                   1 / 1 (100%)

Time: %s, Memory: %s

There was 1 risky test:

1) NothingTest::testNothing
This test did not perform any assertions

%s:14

OK, but incomplete, skipped, or risky tests!
Tests: 1, Assertions: 0, Risky: 1.
=======
--TEST--
phpunit NothingTest ../../_files/NothingTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'NothingTest';
$_SERVER['argv'][3] = __DIR__ . '/../_files/NothingTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

R                                                                   1 / 1 (100%)

Time: %s, Memory: %s

There was 1 risky test:

1) NothingTest::testNothing
This test did not perform any assertions

%s:14

OK, but incomplete, skipped, or risky tests!
Tests: 1, Assertions: 0, Risky: 1.
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
