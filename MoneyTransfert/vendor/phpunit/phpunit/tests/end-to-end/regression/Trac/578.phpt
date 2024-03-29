<<<<<<< HEAD
--TEST--
#578: Double printing of trace line for exceptions from notices and warnings
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'Issue578Test';
$_SERVER['argv'][3] = __DIR__ . '/578/Issue578Test.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

EEE                                                                 3 / 3 (100%)

Time: %s, Memory: %s

There were 3 errors:

1) Issue578Test::testNoticesDoublePrintStackTrace
Invalid error type specified

%sIssue578Test.php:%i

2) Issue578Test::testWarningsDoublePrintStackTrace
Invalid error type specified

%sIssue578Test.php:%i

3) Issue578Test::testUnexpectedExceptionsPrintsCorrectly
Exception: Double printed exception

%sIssue578Test.php:%i

ERRORS!
Tests: 3, Assertions: 0, Errors: 3.
=======
--TEST--
#578: Double printing of trace line for exceptions from notices and warnings
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'Issue578Test';
$_SERVER['argv'][3] = __DIR__ . '/578/Issue578Test.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

EEE                                                                 3 / 3 (100%)

Time: %s, Memory: %s

There were 3 errors:

1) Issue578Test::testNoticesDoublePrintStackTrace
Invalid error type specified

%sIssue578Test.php:%i

2) Issue578Test::testWarningsDoublePrintStackTrace
Invalid error type specified

%sIssue578Test.php:%i

3) Issue578Test::testUnexpectedExceptionsPrintsCorrectly
Exception: Double printed exception

%sIssue578Test.php:%i

ERRORS!
Tests: 3, Assertions: 0, Errors: 3.
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
