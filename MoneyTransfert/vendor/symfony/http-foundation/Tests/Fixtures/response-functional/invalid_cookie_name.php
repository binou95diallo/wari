<<<<<<< HEAD
<?php

use Symfony\Component\HttpFoundation\Cookie;

$r = require __DIR__.'/common.inc';

try {
    $r->headers->setCookie(Cookie::create('Hello + world', 'hodor'));
} catch (\InvalidArgumentException $e) {
    echo $e->getMessage();
}
=======
<?php

use Symfony\Component\HttpFoundation\Cookie;

$r = require __DIR__.'/common.inc';

try {
    $r->headers->setCookie(Cookie::create('Hello + world', 'hodor'));
} catch (\InvalidArgumentException $e) {
    echo $e->getMessage();
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
