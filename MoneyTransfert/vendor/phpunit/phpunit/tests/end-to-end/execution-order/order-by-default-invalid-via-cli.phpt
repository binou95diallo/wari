<<<<<<< HEAD
--TEST--
phpunit --order-by=default,foobar
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--no-configuration',
    '--debug',
    '--order-by=default,foobar',
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

unrecognized --order-by option: foobar
=======
--TEST--
phpunit --order-by=default,foobar
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--no-configuration',
    '--debug',
    '--order-by=default,foobar',
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

unrecognized --order-by option: foobar
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
