<<<<<<< HEAD
--TEST--
PHPT runner supports ARGS section
--ARGS--
help
--FILE--
<?php declare(strict_types=1);
if ($argc > 0 && $argv[1] == 'help') {
    print 'Help';
}
--EXPECT--
Help
=======
--TEST--
PHPT runner supports ARGS section
--ARGS--
help
--FILE--
<?php declare(strict_types=1);
if ($argc > 0 && $argv[1] == 'help') {
    print 'Help';
}
--EXPECT--
Help
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
