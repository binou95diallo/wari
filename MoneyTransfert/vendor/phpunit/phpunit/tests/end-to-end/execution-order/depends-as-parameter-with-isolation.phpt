<<<<<<< HEAD
--TEST--
phpunit --process-isolation StackTest _files/StackTest.php
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--no-configuration',
    '--process-isolation',
    'StackTest',
    \realpath(__DIR__ . '/_files/StackTest.php'),
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: %s, Memory: %s

OK (2 tests, 5 assertions)
=======
--TEST--
phpunit --process-isolation StackTest _files/StackTest.php
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--no-configuration',
    '--process-isolation',
    'StackTest',
    \realpath(__DIR__ . '/_files/StackTest.php'),
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: %s, Memory: %s

OK (2 tests, 5 assertions)
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
