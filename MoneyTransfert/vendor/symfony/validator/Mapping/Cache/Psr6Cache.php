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

namespace Symfony\Component\Validator\Mapping\Cache;

use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * PSR-6 adapter.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Psr6Cache implements CacheInterface
{
    private $cacheItemPool;

    public function __construct(CacheItemPoolInterface $cacheItemPool)
    {
        $this->cacheItemPool = $cacheItemPool;
    }

    /**
     * {@inheritdoc}
     */
    public function has($class)
    {
        return $this->cacheItemPool->hasItem($this->escapeClassName($class));
    }

    /**
     * {@inheritdoc}
     */
    public function read($class)
    {
        $item = $this->cacheItemPool->getItem($this->escapeClassName($class));

        if (!$item->isHit()) {
            return false;
        }

        return $item->get();
    }

    /**
     * {@inheritdoc}
     */
    public function write(ClassMetadata $metadata)
    {
        $item = $this->cacheItemPool->getItem($this->escapeClassName($metadata->getClassName()));
        $item->set($metadata);

        $this->cacheItemPool->save($item);
    }

    /**
     * Replaces backslashes by dots in a class name.
     */
    private function escapeClassName(string $class): string
    {
        if (false !== strpos($class, '@')) {
            // anonymous class: replace all PSR6-reserved characters
            return str_replace(["\0", '\\', '/', '@', ':', '{', '}', '(', ')'], '.', $class);
        }

        return str_replace('\\', '.', $class);
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

namespace Symfony\Component\Validator\Mapping\Cache;

use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * PSR-6 adapter.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Psr6Cache implements CacheInterface
{
    private $cacheItemPool;

    public function __construct(CacheItemPoolInterface $cacheItemPool)
    {
        $this->cacheItemPool = $cacheItemPool;
    }

    /**
     * {@inheritdoc}
     */
    public function has($class)
    {
        return $this->cacheItemPool->hasItem($this->escapeClassName($class));
    }

    /**
     * {@inheritdoc}
     */
    public function read($class)
    {
        $item = $this->cacheItemPool->getItem($this->escapeClassName($class));

        if (!$item->isHit()) {
            return false;
        }

        return $item->get();
    }

    /**
     * {@inheritdoc}
     */
    public function write(ClassMetadata $metadata)
    {
        $item = $this->cacheItemPool->getItem($this->escapeClassName($metadata->getClassName()));
        $item->set($metadata);

        $this->cacheItemPool->save($item);
    }

    /**
     * Replaces backslashes by dots in a class name.
     */
    private function escapeClassName(string $class): string
    {
        if (false !== strpos($class, '@')) {
            // anonymous class: replace all PSR6-reserved characters
            return str_replace(["\0", '\\', '/', '@', ':', '{', '}', '(', ')'], '.', $class);
        }

        return str_replace('\\', '.', $class);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
