<<<<<<< HEAD
--TEST--
PHPT runner supports XFAIL section
--FILE--
<?php declare(strict_types=1);
{syntaxError}
echo "Should not see this";
--XFAIL--
Syntax Error in PHPT is supposed to fail
--EXPECT--
Should not see this
=======
--TEST--
PHPT runner supports XFAIL section
--FILE--
<?php declare(strict_types=1);
{syntaxError}
echo "Should not see this";
--XFAIL--
Syntax Error in PHPT is supposed to fail
--EXPECT--
Should not see this
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
