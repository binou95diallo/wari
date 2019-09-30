<<<<<<< HEAD
<?php

require __DIR__.'/common.inc';

setcookie('abc', 'def');

session_set_save_handler(new TestSessionHandler('abc|i:123;'), false);
session_start();
session_write_close();
session_start();

$_SESSION['abc'] = 234;
unset($_SESSION['abc']);
=======
<?php

require __DIR__.'/common.inc';

setcookie('abc', 'def');

session_set_save_handler(new TestSessionHandler('abc|i:123;'), false);
session_start();
session_write_close();
session_start();

$_SESSION['abc'] = 234;
unset($_SESSION['abc']);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
