<<<<<<< HEAD
<?php

use Symfony\Component\HttpFoundation\Cookie;

$r = require __DIR__.'/common.inc';

$str = '?*():@&+$/%#[]';

$r->headers->setCookie(new Cookie($str, $str, 0, '/', null, false, false, true, null));
$r->sendHeaders();

setrawcookie($str, $str, 0, '/', null, false, false);
=======
<?php

use Symfony\Component\HttpFoundation\Cookie;

$r = require __DIR__.'/common.inc';

$str = '?*():@&+$/%#[]';

$r->headers->setCookie(new Cookie($str, $str, 0, '/', null, false, false, true, null));
$r->sendHeaders();

setrawcookie($str, $str, 0, '/', null, false, false);
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
