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

namespace Symfony\Component\HttpKernel\CacheClearer;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Psr6CacheClearer implements CacheClearerInterface
{
    private $pools = [];

    public function __construct(array $pools = [])
    {
        $this->pools = $pools;
    }

    public function hasPool($name)
    {
        return isset($this->pools[$name]);
    }

    public function getPool($name)
    {
        if (!$this->hasPool($name)) {
            throw new \InvalidArgumentException(sprintf('Cache pool not found: %s.', $name));
        }

        return $this->pools[$name];
    }

    public function clearPool($name)
    {
        if (!isset($this->pools[$name])) {
            throw new \InvalidArgumentException(sprintf('Cache pool not found: %s.', $name));
        }

        return $this->pools[$name]->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function clear($cacheDir)
    {
        foreach ($this->pools as $pool) {
            $pool->clear();
        }
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

namespace Symfony\Component\HttpKernel\CacheClearer;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Psr6CacheClearer implements CacheClearerInterface
{
    private $pools = [];

    public function __construct(array $pools = [])
    {
        $this->pools = $pools;
    }

    public function hasPool($name)
    {
        return isset($this->pools[$name]);
    }

    public function getPool($name)
    {
        if (!$this->hasPool($name)) {
            throw new \InvalidArgumentException(sprintf('Cache pool not found: %s.', $name));
        }

        return $this->pools[$name];
    }

    public function clearPool($name)
    {
        if (!isset($this->pools[$name])) {
            throw new \InvalidArgumentException(sprintf('Cache pool not found: %s.', $name));
        }

        return $this->pools[$name]->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function clear($cacheDir)
    {
        foreach ($this->pools as $pool) {
            $pool->clear();
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
