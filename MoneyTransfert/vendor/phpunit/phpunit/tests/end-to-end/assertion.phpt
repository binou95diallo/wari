<<<<<<< HEAD
--TEST--
phpunit AssertionExampleTest ../../_files/AssertionExampleTest.php
--SKIPIF--
<?php declare(strict_types=1);
if (PHP_MAJOR_VERSION < 7) {
    print 'skip: PHP 7 is required' . PHP_EOL;
}

if (ini_get('zend.assertions') != 1) {
    print 'skip: zend.assertions=1 is required' . PHP_EOL;
}

if (ini_get('assert.exception') != 1) {
    print 'skip: assert.exception=1 is required' . PHP_EOL;
}
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'AssertionExampleTest';
$_SERVER['argv'][3] = __DIR__ . '/../_files/AssertionExampleTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

F                                                                   1 / 1 (100%)

Time: %s, Memory: %s

There was 1 failure:

1) AssertionExampleTest::testOne
assert(false) in %sAssertionExample.php:%d

FAILURES!
Tests: 1, Assertions: 1, Failures: 1.
=======
--TEST--
phpunit AssertionExampleTest ../../_files/AssertionExampleTest.php
--SKIPIF--
<?php declare(strict_types=1);
if (PHP_MAJOR_VERSION < 7) {
    print 'skip: PHP 7 is required' . PHP_EOL;
}

if (ini_get('zend.assertions') != 1) {
    print 'skip: zend.assertions=1 is required' . PHP_EOL;
}

if (ini_get('assert.exception') != 1) {
    print 'skip: assert.exception=1 is required' . PHP_EOL;
}
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'AssertionExampleTest';
$_SERVER['argv'][3] = __DIR__ . '/../_files/AssertionExampleTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

F                                                                   1 / 1 (100%)

Time: %s, Memory: %s

There was 1 failure:

1) AssertionExampleTest::testOne
assert(false) in %sAssertionExample.php:%d

FAILURES!
Tests: 1, Assertions: 1, Failures: 1.
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
