<<<<<<< HEAD
--TEST--
phpunit --repeat 3 BankAccountTest ../../_files/BankAccountTest.php
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--no-configuration',
    '--repeat',
    '3',
    'BankAccountTest',
    \realpath(__DIR__ . '/../../_files/BankAccountTest.php'),
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.........                                                           9 / 9 (100%)

Time: %s, Memory: %s

OK (9 tests, 9 assertions)
=======
--TEST--
phpunit --repeat 3 BankAccountTest ../../_files/BankAccountTest.php
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--no-configuration',
    '--repeat',
    '3',
    'BankAccountTest',
    \realpath(__DIR__ . '/../../_files/BankAccountTest.php'),
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.........                                                           9 / 9 (100%)

Time: %s, Memory: %s

OK (9 tests, 9 assertions)
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
