<<<<<<< HEAD
--TEST--
#2448: Weird error when trying to run `Test` from `Test.php` but `Test.php` does not exist
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'Test';

\chdir(__DIR__ . '/2448');

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main(false);

@unlink(__DIR__ . '/2448/.phpunit.result.cache');
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK (1 test, 1 assertion)
=======
--TEST--
#2448: Weird error when trying to run `Test` from `Test.php` but `Test.php` does not exist
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'Test';

\chdir(__DIR__ . '/2448');

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main(false);

@unlink(__DIR__ . '/2448/.phpunit.result.cache');
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK (1 test, 1 assertion)
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
