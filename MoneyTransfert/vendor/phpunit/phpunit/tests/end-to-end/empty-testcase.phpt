<<<<<<< HEAD
--TEST--
phpunit EmptyTestCaseTest ../../_files/EmptyTestCaseTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'EmptyTestCaseTest';
$_SERVER['argv'][3] = __DIR__ . '/../_files/EmptyTestCaseTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

W                                                                   1 / 1 (100%)

Time: %s, Memory: %s

There was 1 warning:

1) Warning
No tests found in class "EmptyTestCaseTest".

WARNINGS!
Tests: 1, Assertions: 0, Warnings: 1.
=======
--TEST--
phpunit EmptyTestCaseTest ../../_files/EmptyTestCaseTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'EmptyTestCaseTest';
$_SERVER['argv'][3] = __DIR__ . '/../_files/EmptyTestCaseTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

W                                                                   1 / 1 (100%)

Time: %s, Memory: %s

There was 1 warning:

1) Warning
No tests found in class "EmptyTestCaseTest".

WARNINGS!
Tests: 1, Assertions: 0, Warnings: 1.
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
