<<<<<<< HEAD
--TEST--
https://github.com/sebastianbergmann/phpunit/issues/1374
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'Issue1374Test';
$_SERVER['argv'][3] = __DIR__ . '/1374/Issue1374Test.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

S                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK, but incomplete, skipped, or risky tests!
Tests: 1, Assertions: 0, Skipped: 1.
=======
--TEST--
https://github.com/sebastianbergmann/phpunit/issues/1374
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'Issue1374Test';
$_SERVER['argv'][3] = __DIR__ . '/1374/Issue1374Test.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

S                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK, but incomplete, skipped, or risky tests!
Tests: 1, Assertions: 0, Skipped: 1.
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
