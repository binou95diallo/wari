<<<<<<< HEAD
--TEST--
phpunit --process-isolation --group balanceIsInitiallyZero BankAccountTest ../../_files/BankAccountTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--process-isolation';
$_SERVER['argv'][3] = '--group';
$_SERVER['argv'][4] = 'balanceIsInitiallyZero';
$_SERVER['argv'][5] = 'BankAccountTest';
$_SERVER['argv'][6] = __DIR__ . '/../_files/BankAccountTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK (1 test, 1 assertion)
=======
--TEST--
phpunit --process-isolation --group balanceIsInitiallyZero BankAccountTest ../../_files/BankAccountTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--process-isolation';
$_SERVER['argv'][3] = '--group';
$_SERVER['argv'][4] = 'balanceIsInitiallyZero';
$_SERVER['argv'][5] = 'BankAccountTest';
$_SERVER['argv'][6] = __DIR__ . '/../_files/BankAccountTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK (1 test, 1 assertion)
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
