<<<<<<< HEAD
--TEST--
phpunit --verbose ClonedDependencyTest ../../_files/ClonedDependencyTest.php
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--no-configuration',
    '--verbose',
    'ClonedDependencyTest',
    \realpath(__DIR__ . '/_files/ClonedDependencyTest.php'),
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Runtime:       %s

......                                                              6 / 6 (100%)

Time: %s, Memory: %s

OK (6 tests, 6 assertions)

=======
--TEST--
phpunit --verbose ClonedDependencyTest ../../_files/ClonedDependencyTest.php
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--no-configuration',
    '--verbose',
    'ClonedDependencyTest',
    \realpath(__DIR__ . '/_files/ClonedDependencyTest.php'),
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Runtime:       %s

......                                                              6 / 6 (100%)

Time: %s, Memory: %s

OK (6 tests, 6 assertions)

>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
