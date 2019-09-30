<<<<<<< HEAD
<?php

require __DIR__.'/common.inc';

session_set_save_handler(new TestSessionHandler('abc|i:123;'), false);
session_start();

setcookie('abc', 'def');
=======
<?php

require __DIR__.'/common.inc';

session_set_save_handler(new TestSessionHandler('abc|i:123;'), false);
session_start();

setcookie('abc', 'def');
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
