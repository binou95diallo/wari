<<<<<<< HEAD
--TEST--
https://github.com/sebastianbergmann/phpunit/issues/1335
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--bootstrap';
$_SERVER['argv'][3] = __DIR__ . '/1335/bootstrap1335.php';
$_SERVER['argv'][4] = __DIR__ . '/1335/Issue1335Test.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

............                                                      12 / 12 (100%)

Time: %s, Memory: %s

OK (12 tests, 12 assertions)
=======
--TEST--
https://github.com/sebastianbergmann/phpunit/issues/1335
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--bootstrap';
$_SERVER['argv'][3] = __DIR__ . '/1335/bootstrap1335.php';
$_SERVER['argv'][4] = __DIR__ . '/1335/Issue1335Test.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

............                                                      12 / 12 (100%)

Time: %s, Memory: %s

OK (12 tests, 12 assertions)
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
