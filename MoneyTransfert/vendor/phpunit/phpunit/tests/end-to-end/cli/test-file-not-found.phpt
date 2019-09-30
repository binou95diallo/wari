<<<<<<< HEAD
--TEST--
Test incorrect testFile is reported
--ARGS--
--no-configuration tests nonExistingFile.php
--FILE--
<?php declare(strict_types=1);
require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Cannot open file "nonExistingFile.php".
=======
--TEST--
Test incorrect testFile is reported
--ARGS--
--no-configuration tests nonExistingFile.php
--FILE--
<?php declare(strict_types=1);
require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Cannot open file "nonExistingFile.php".
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
