<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations;

use Symfony\Component\Stopwatch\Stopwatch as SymfonyStopwatch;
use Symfony\Component\Stopwatch\StopwatchEvent;

/**
 * The Stopwatch class wraps the Symfony Stopwatch class so that we do not directly depend on it.
 *
 * @internal
 */
class Stopwatch
{
    /** @var SymfonyStopwatch */
    private $symfonyStopwatch;

    public function __construct(SymfonyStopwatch $symfonyStopwatch)
    {
        $this->symfonyStopwatch = $symfonyStopwatch;
    }

    public function start(string $section) : StopwatchEvent
    {
        return $this->symfonyStopwatch->start($section);
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations;

use Symfony\Component\Stopwatch\Stopwatch as SymfonyStopwatch;
use Symfony\Component\Stopwatch\StopwatchEvent;

/**
 * The Stopwatch class wraps the Symfony Stopwatch class so that we do not directly depend on it.
 *
 * @internal
 */
class Stopwatch
{
    /** @var SymfonyStopwatch */
    private $symfonyStopwatch;

    public function __construct(SymfonyStopwatch $symfonyStopwatch)
    {
        $this->symfonyStopwatch = $symfonyStopwatch;
    }

    public function start(string $section) : StopwatchEvent
    {
        return $this->symfonyStopwatch->start($section);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
