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

namespace Symfony\Component\Console\Tests\Fixtures;

use Symfony\Component\Console\Output\BufferedOutput;

/**
 * Dummy output.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DummyOutput extends BufferedOutput
{
    /**
     * @return array
     */
    public function getLogs()
    {
        $logs = [];
        foreach (explode(PHP_EOL, trim($this->fetch())) as $message) {
            preg_match('/^\[(.*)\] (.*)/', $message, $matches);
            $logs[] = sprintf('%s %s', $matches[1], $matches[2]);
        }

        return $logs;
    }
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

namespace Symfony\Component\Console\Tests\Fixtures;

use Symfony\Component\Console\Output\BufferedOutput;

/**
 * Dummy output.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DummyOutput extends BufferedOutput
{
    /**
     * @return array
     */
    public function getLogs()
    {
        $logs = [];
        foreach (explode(PHP_EOL, trim($this->fetch())) as $message) {
            preg_match('/^\[(.*)\] (.*)/', $message, $matches);
            $logs[] = sprintf('%s %s', $matches[1], $matches[2]);
        }

        return $logs;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
