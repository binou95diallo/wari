<<<<<<< HEAD
<?php

require __DIR__.'/common.inc';

use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

$storage = new NativeSessionStorage(['cookie_samesite' => 'lax']);
$storage->setSaveHandler(new TestSessionHandler());
$storage->start();

$_SESSION = ['foo' => 'bar'];

$storage->regenerate(true);

ob_start(function ($buffer) { return preg_replace('~_sf2_meta.*$~m', '', str_replace(session_id(), 'random_session_id', $buffer)); });
=======
<?php

require __DIR__.'/common.inc';

use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

$storage = new NativeSessionStorage(['cookie_samesite' => 'lax']);
$storage->setSaveHandler(new TestSessionHandler());
$storage->start();

$_SESSION = ['foo' => 'bar'];

$storage->regenerate(true);

ob_start(function ($buffer) { return preg_replace('~_sf2_meta.*$~m', '', str_replace(session_id(), 'random_session_id', $buffer)); });
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
