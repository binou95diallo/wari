<<<<<<< HEAD
<?php

use Symfony\Component\HttpFoundation\Cookie;

$r = require __DIR__.'/common.inc';

$r->headers->setCookie(new Cookie('foo', 'bar', 253402310800, '', null, false, false, false, null));
$r->sendHeaders();

setcookie('foo2', 'bar', 253402310800, '/');
=======
<?php

use Symfony\Component\HttpFoundation\Cookie;

$r = require __DIR__.'/common.inc';

$r->headers->setCookie(new Cookie('foo', 'bar', 253402310800, '', null, false, false, false, null));
$r->sendHeaders();

setcookie('foo2', 'bar', 253402310800, '/');
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
