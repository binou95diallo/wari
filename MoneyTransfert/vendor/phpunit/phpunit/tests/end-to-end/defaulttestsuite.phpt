<<<<<<< HEAD
--TEST--
phpunit --testdox --configuration=__DIR__.'/../_files/configuration.defaulttestsuite.xml'
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--testdox';
$_SERVER['argv'][2] = '--configuration';
$_SERVER['argv'][3] = __DIR__.'/../_files/configuration.defaulttestsuite.xml';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

DummyBar
 ✔ Bar equals bar

Time: %s, Memory: %s

OK (1 test, 1 assertion)
=======
--TEST--
phpunit --testdox --configuration=__DIR__.'/../_files/configuration.defaulttestsuite.xml'
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--testdox';
$_SERVER['argv'][2] = '--configuration';
$_SERVER['argv'][3] = __DIR__.'/../_files/configuration.defaulttestsuite.xml';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

DummyBar
 ✔ Bar equals bar

Time: %s, Memory: %s

OK (1 test, 1 assertion)
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
