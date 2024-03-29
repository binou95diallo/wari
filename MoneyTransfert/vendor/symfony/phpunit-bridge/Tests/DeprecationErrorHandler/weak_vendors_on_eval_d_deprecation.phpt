<<<<<<< HEAD
--TEST--
Test DeprecationErrorHandler in weak vendors mode on eval()'d deprecation
--FILE--
<?php

$k = 'SYMFONY_DEPRECATIONS_HELPER';
putenv($k.'='.$_SERVER[$k] = $_ENV[$k] = 'max[self]=0');
putenv('ANSICON');
putenv('ConEmuANSI');
putenv('TERM');

$vendor = __DIR__;
while (!file_exists($vendor.'/vendor')) {
    $vendor = dirname($vendor);
}
define('PHPUNIT_COMPOSER_INSTALL', $vendor.'/vendor/autoload.php');
require PHPUNIT_COMPOSER_INSTALL;
require_once __DIR__.'/../../bootstrap.php';
eval("@trigger_error('who knows where I come from?', E_USER_DEPRECATED);");

?>
--EXPECTF--
Other deprecation notices (1)

  1x: who knows where I come from?
=======
--TEST--
Test DeprecationErrorHandler in weak vendors mode on eval()'d deprecation
--FILE--
<?php

$k = 'SYMFONY_DEPRECATIONS_HELPER';
putenv($k.'='.$_SERVER[$k] = $_ENV[$k] = 'max[self]=0');
putenv('ANSICON');
putenv('ConEmuANSI');
putenv('TERM');

$vendor = __DIR__;
while (!file_exists($vendor.'/vendor')) {
    $vendor = dirname($vendor);
}
define('PHPUNIT_COMPOSER_INSTALL', $vendor.'/vendor/autoload.php');
require PHPUNIT_COMPOSER_INSTALL;
require_once __DIR__.'/../../bootstrap.php';
eval("@trigger_error('who knows where I come from?', E_USER_DEPRECATED);");

?>
--EXPECTF--
Other deprecation notices (1)

  1x: who knows where I come from?
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
