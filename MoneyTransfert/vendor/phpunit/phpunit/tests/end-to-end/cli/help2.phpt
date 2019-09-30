<<<<<<< HEAD
--TEST--
phpunit --help
--ARGS--
--no-configuration --help
--FILE--
<?php declare(strict_types=1);
require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF_EXTERNAL--
_files/output-cli-usage.txt
=======
--TEST--
phpunit --help
--ARGS--
--no-configuration --help
--FILE--
<?php declare(strict_types=1);
require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF_EXTERNAL--
_files/output-cli-usage.txt
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
