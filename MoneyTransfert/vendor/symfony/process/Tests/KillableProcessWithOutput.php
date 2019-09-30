<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$outputs = [
    'First iteration output',
    'Second iteration output',
    'One more iteration output',
    'This took more time',
];

$iterationTime = 10000;

foreach ($outputs as $output) {
    usleep($iterationTime);
    $iterationTime *= 10;
    echo $output."\n";
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$outputs = [
    'First iteration output',
    'Second iteration output',
    'One more iteration output',
    'This took more time',
];

$iterationTime = 10000;

foreach ($outputs as $output) {
    usleep($iterationTime);
    $iterationTime *= 10;
    echo $output."\n";
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
