<?php

declare(strict_types=1);

namespace Metadata\Cache;

use Metadata\ClassMetadata;

class FileCache implements CacheInterface
{
    /**
     * @var string
     */
    private $dir;

    public function __construct(string $dir)
    {
        if (!is_dir($dir)) {
            throw new \InvalidArgumentException(sprintf('The directory "%s" does not exist.', $dir));
        }

        $this->dir = rtrim($dir, '\\/');
    }

    /**
     * {@inheritDoc}
     */
    public function load(string $class): ?ClassMetadata
    {
        $path = $this->dir . '/' . strtr($class, '\\', '-') . '.cache.php';
        if (!file_exists($path)) {
            return null;
        }

        return include $path;
    }

    /**
     * {@inheritDoc}
     */
    public function put(ClassMetadata $metadata): void
    {
        if (!is_writable($this->dir)) {
            throw new \InvalidArgumentException(sprintf('The directory "%s" is not writable.', $this->dir));
        }

        $path = $this->dir . '/' . strtr($metadata->name, '\\', '-') . '.cache.php';

        $tmpFile = tempnam($this->dir, 'metadata-cache');
        file_put_contents($tmpFile, '<?php return unserialize(' . var_export(serialize($metadata), true) . ');');

        // Let's not break filesystems which do not support chmod.
        @chmod($tmpFile, 0666 & ~umask());

        $this->renameFile($tmpFile, $path);
    }

    /**
     * Renames a file with fallback for windows
     *
     */
    private function renameFile(string $source, string $target): void
    {
        if (false === @rename($source, $target)) {
            if (defined('PHP_WINDOWS_VERSION_BUILD')) {
                if (false === copy($source, $target)) {
                    throw new \RuntimeException(sprintf('(WIN) Could not write new cache file to %s.', $target));
                }
                if (false === unlink($source)) {
                    throw new \RuntimeException(sprintf('(WIN) Could not delete temp cache file to %s.', $source));
                }
            } else {
                throw new \RuntimeException(sprintf('Could not write new cache file to %s.', $target));
            }
        }
    }

    /**
     * {@inheritDoc}
     */
    public function evict(string $class): void
    {
        $path = $this->dir . '/' . strtr($class, '\\', '-') . '.cache.php';
        if (file_exists($path)) {
            unlink($path);
        }
    }
}
