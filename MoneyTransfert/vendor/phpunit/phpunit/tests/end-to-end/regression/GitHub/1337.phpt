<<<<<<< HEAD
--TEST--
https://github.com/sebastianbergmann/phpunit/issues/1337
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--process-isolation';
$_SERVER['argv'][3] = 'Issue1337Test';
$_SERVER['argv'][4] = __DIR__ . '/1337/Issue1337Test.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: %s, Memory: %s

OK (2 tests, 2 assertions)
=======
--TEST--
https://github.com/sebastianbergmann/phpunit/issues/1337
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--process-isolation';
$_SERVER['argv'][3] = 'Issue1337Test';
$_SERVER['argv'][4] = __DIR__ . '/1337/Issue1337Test.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: %s, Memory: %s

OK (2 tests, 2 assertions)
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
