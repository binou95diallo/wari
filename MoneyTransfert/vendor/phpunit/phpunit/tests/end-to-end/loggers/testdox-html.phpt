<<<<<<< HEAD
--TEST--
phpunit --testdox-html php://stdout BankAccountTest ../../_files/BankAccountTest.php
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--no-configuration',
    '--testdox-html',
    'php://stdout',
    'BankAccountTest',
    \realpath(__DIR__ . '/../../_files/BankAccountTest.php'),
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Test Documentation</title>
        <style>
            body {
                text-rendering: optimizeLegibility;
                font-variant-ligatures: common-ligatures;
                font-kerning: normal;
                margin-left: 2em;
            }

            body > ul > li {
                font-family: Source Serif Pro, PT Sans, Trebuchet MS, Helvetica, Arial;
                font-size: 2em;
            }

            h2 {
                font-family: Tahoma, Helvetica, Arial;
                font-size: 3em;
            }

            ul {
                list-style: none;
                margin-bottom: 1em;
            }
        </style>
    </head>
    <body>

        <h2 id="BankAccountTest">BankAccount</h2>
        <ul>
...                                                                 3 / 3 (100%)            <li style="color: #555753;">✓ Balance is initially zero</li>
            <li style="color: #555753;">✓ Balance cannot become negative</li>
            <li style="color: #555753;">✓ Balance cannot become negative</li>
        </ul>
    </body>
</html>

Time: %s, Memory: %s

OK (3 tests, 3 assertions)
=======
--TEST--
phpunit --testdox-html php://stdout BankAccountTest ../../_files/BankAccountTest.php
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--no-configuration',
    '--testdox-html',
    'php://stdout',
    'BankAccountTest',
    \realpath(__DIR__ . '/../../_files/BankAccountTest.php'),
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Test Documentation</title>
        <style>
            body {
                text-rendering: optimizeLegibility;
                font-variant-ligatures: common-ligatures;
                font-kerning: normal;
                margin-left: 2em;
            }

            body > ul > li {
                font-family: Source Serif Pro, PT Sans, Trebuchet MS, Helvetica, Arial;
                font-size: 2em;
            }

            h2 {
                font-family: Tahoma, Helvetica, Arial;
                font-size: 3em;
            }

            ul {
                list-style: none;
                margin-bottom: 1em;
            }
        </style>
    </head>
    <body>

        <h2 id="BankAccountTest">BankAccount</h2>
        <ul>
...                                                                 3 / 3 (100%)            <li style="color: #555753;">✓ Balance is initially zero</li>
            <li style="color: #555753;">✓ Balance cannot become negative</li>
            <li style="color: #555753;">✓ Balance cannot become negative</li>
        </ul>
    </body>
</html>

Time: %s, Memory: %s

OK (3 tests, 3 assertions)
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
