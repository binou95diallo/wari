<<<<<<< HEAD
<?php

use Symfony\Component\HttpFoundation\Cookie;

$r = require __DIR__.'/common.inc';

$str = '?*():@&+$/%#[]';

$r->headers->setCookie(new Cookie($str, $str, 0, '', null, false, false, false, null));
$r->sendHeaders();

setcookie($str, $str, 0, '/');
=======
<?php

use Symfony\Component\HttpFoundation\Cookie;

$r = require __DIR__.'/common.inc';

$str = '?*():@&+$/%#[]';

$r->headers->setCookie(new Cookie($str, $str, 0, '', null, false, false, false, null));
$r->sendHeaders();

setcookie($str, $str, 0, '/');
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
