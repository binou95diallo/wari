<<<<<<< HEAD
--TEST--
phpunit --stop-on-error StopOnErrorTestSuite ./tests/_files/StopOnErrorTestSuite.php
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--no-configuration',
    '--stop-on-error',
    'StopOnErrorTestSuite',
    \realpath(__DIR__ . '/../../_files/StopOnErrorTestSuite.php'),
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

IE

Time: %s, Memory: %s

There was 1 error:

1) StopOnErrorTestSuite::testWithError
Error: StopOnErrorTestSuite_error

%s%etests%e_files%eStopOnErrorTestSuite.php:%d

ERRORS!
Tests: 2, Assertions: 1, Errors: 1, Incomplete: 1.
=======
--TEST--
phpunit --stop-on-error StopOnErrorTestSuite ./tests/_files/StopOnErrorTestSuite.php
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--no-configuration',
    '--stop-on-error',
    'StopOnErrorTestSuite',
    \realpath(__DIR__ . '/../../_files/StopOnErrorTestSuite.php'),
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

IE

Time: %s, Memory: %s

There was 1 error:

1) StopOnErrorTestSuite::testWithError
Error: StopOnErrorTestSuite_error

%s%etests%e_files%eStopOnErrorTestSuite.php:%d

ERRORS!
Tests: 2, Assertions: 1, Errors: 1, Incomplete: 1.
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
