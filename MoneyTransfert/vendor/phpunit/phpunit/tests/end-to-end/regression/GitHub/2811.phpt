<<<<<<< HEAD
--TEST--
GH-2811: expectExceptionMessage() does not work without expectException()
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'Issue2811Test';
$_SERVER['argv'][3] = __DIR__ . '/2811/Issue2811Test.php';

require __DIR__ . '/../../../bootstrap.php';

PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK (1 test, 1 assertion)
=======
--TEST--
GH-2811: expectExceptionMessage() does not work without expectException()
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'Issue2811Test';
$_SERVER['argv'][3] = __DIR__ . '/2811/Issue2811Test.php';

require __DIR__ . '/../../../bootstrap.php';

PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK (1 test, 1 assertion)
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
