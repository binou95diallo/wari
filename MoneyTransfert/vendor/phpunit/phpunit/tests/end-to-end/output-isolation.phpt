<<<<<<< HEAD
--TEST--
phpunit --process-isolation --filter testExpectOutputStringFooActualFoo ../../_files/OutputTestCase.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--process-isolation';
$_SERVER['argv'][3] = '--filter';
$_SERVER['argv'][4] = 'testExpectOutputStringFooActualFoo';
$_SERVER['argv'][5] = __DIR__ . '/../_files/OutputTestCase.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK (1 test, 1 assertion)
=======
--TEST--
phpunit --process-isolation --filter testExpectOutputStringFooActualFoo ../../_files/OutputTestCase.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--process-isolation';
$_SERVER['argv'][3] = '--filter';
$_SERVER['argv'][4] = 'testExpectOutputStringFooActualFoo';
$_SERVER['argv'][5] = __DIR__ . '/../_files/OutputTestCase.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK (1 test, 1 assertion)
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
