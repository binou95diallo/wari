<<<<<<< HEAD
--TEST--
phpunit --list-suites --configuration=__DIR__.'/../_files/configuration.suites.xml'
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--list-suites';
$_SERVER['argv'][2] = '--configuration';
$_SERVER['argv'][3] = __DIR__.'/../_files/configuration.suites.xml';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Available test suite(s):
 - Suite One
 - Suite Two
=======
--TEST--
phpunit --list-suites --configuration=__DIR__.'/../_files/configuration.suites.xml'
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--list-suites';
$_SERVER['argv'][2] = '--configuration';
$_SERVER['argv'][3] = __DIR__.'/../_files/configuration.suites.xml';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Available test suite(s):
 - Suite One
 - Suite Two
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
