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

pcntl_signal(SIGUSR1, function () { echo 'SIGUSR1'; exit; });

echo 'Caught ';

$n = 0;

while ($n++ < 400) {
    usleep(10000);
    pcntl_signal_dispatch();
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

pcntl_signal(SIGUSR1, function () { echo 'SIGUSR1'; exit; });

echo 'Caught ';

$n = 0;

while ($n++ < 400) {
    usleep(10000);
    pcntl_signal_dispatch();
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
