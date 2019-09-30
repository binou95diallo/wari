<<<<<<< HEAD
--TEST--
GH-2725: Verify that @runClassInSeparateProcess runs @beforeclass and @afterclass methods in the same process as test methods.
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = __DIR__ . '/2725/BeforeAfterClassPidTest.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: %s, Memory: %s

OK (2 tests, 2 assertions)
=======
--TEST--
GH-2725: Verify that @runClassInSeparateProcess runs @beforeclass and @afterclass methods in the same process as test methods.
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = __DIR__ . '/2725/BeforeAfterClassPidTest.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: %s, Memory: %s

OK (2 tests, 2 assertions)
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
