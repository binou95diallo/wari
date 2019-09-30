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

namespace Symfony\Component\Console\Helper;

/**
 * @internal
 */
class TableRows implements \IteratorAggregate
{
    private $generator;

    public function __construct(callable $generator)
    {
        $this->generator = $generator;
    }

    public function getIterator()
    {
        $g = $this->generator;

        return $g();
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

namespace Symfony\Component\Console\Helper;

/**
 * @internal
 */
class TableRows implements \IteratorAggregate
{
    private $generator;

    public function __construct(callable $generator)
    {
        $this->generator = $generator;
    }

    public function getIterator()
    {
        $g = $this->generator;

        return $g();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
