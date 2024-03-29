<<<<<<< HEAD
--TEST--
#783: Tests getting executed twice when using multiple groups
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--group';
$_SERVER['argv'][3] = 'foo,bar';
$_SERVER['argv'][4] = 'ParentSuite';
$_SERVER['argv'][5] = __DIR__ . '/783/ParentSuite.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: %s, Memory: %s

OK (2 tests, 2 assertions)
=======
--TEST--
#783: Tests getting executed twice when using multiple groups
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--group';
$_SERVER['argv'][3] = 'foo,bar';
$_SERVER['argv'][4] = 'ParentSuite';
$_SERVER['argv'][5] = __DIR__ . '/783/ParentSuite.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: %s, Memory: %s

OK (2 tests, 2 assertions)
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
