<<<<<<< HEAD
--TEST--
GH-455: expectOutputString not working in strict mode
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--disallow-test-output';
$_SERVER['argv'][3] = 'Issue445Test';
$_SERVER['argv'][4] = __DIR__ . '/445/Issue445Test.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

..F                                                                 3 / 3 (100%)

Time: %s, Memory: %s

There was 1 failure:

1) Issue445Test::testNotMatchingOutput
Failed asserting that two strings are equal.
--- Expected
+++ Actual
@@ @@
-'foo'
+'bar'

FAILURES!
Tests: 3, Assertions: 3, Failures: 1.
=======
--TEST--
GH-455: expectOutputString not working in strict mode
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--disallow-test-output';
$_SERVER['argv'][3] = 'Issue445Test';
$_SERVER['argv'][4] = __DIR__ . '/445/Issue445Test.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

..F                                                                 3 / 3 (100%)

Time: %s, Memory: %s

There was 1 failure:

1) Issue445Test::testNotMatchingOutput
Failed asserting that two strings are equal.
--- Expected
+++ Actual
@@ @@
-'foo'
+'bar'

FAILURES!
Tests: 3, Assertions: 3, Failures: 1.
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
