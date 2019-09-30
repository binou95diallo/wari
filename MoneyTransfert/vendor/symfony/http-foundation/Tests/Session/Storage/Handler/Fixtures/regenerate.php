<<<<<<< HEAD
<?php

require __DIR__.'/common.inc';

session_set_save_handler(new TestSessionHandler('abc|i:123;'), false);
session_start();

session_regenerate_id(true);

ob_start(function ($buffer) { return str_replace(session_id(), 'random_session_id', $buffer); });
=======
<?php

require __DIR__.'/common.inc';

session_set_save_handler(new TestSessionHandler('abc|i:123;'), false);
session_start();

session_regenerate_id(true);

ob_start(function ($buffer) { return str_replace(session_id(), 'random_session_id', $buffer); });
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
