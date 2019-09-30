<<<<<<< HEAD
--TEST--
PHPT runner should support ENV section
--ENV--
FOO=bar
--FILE--
<?php declare(strict_types=1);
if (isset($_SERVER['FOO'])) {
    \var_dump($_SERVER['FOO']);
}
--EXPECTF_EXTERNAL--
_files/phpt-env.expected.txt
=======
--TEST--
PHPT runner should support ENV section
--ENV--
FOO=bar
--FILE--
<?php declare(strict_types=1);
if (isset($_SERVER['FOO'])) {
    \var_dump($_SERVER['FOO']);
}
--EXPECTF_EXTERNAL--
_files/phpt-env.expected.txt
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
