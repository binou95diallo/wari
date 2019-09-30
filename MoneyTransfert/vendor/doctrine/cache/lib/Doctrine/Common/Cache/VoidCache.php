<<<<<<< HEAD
<?php

namespace Doctrine\Common\Cache;

/**
 * Void cache driver. The cache could be of use in tests where you don`t need to cache anything.
 *
 * @link   www.doctrine-project.org
 */
class VoidCache extends CacheProvider
{
    /**
     * {@inheritDoc}
     */
    protected function doFetch($id)
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    protected function doContains($id)
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    protected function doSave($id, $data, $lifeTime = 0)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function doDelete($id)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function doFlush()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function doGetStats()
    {
        return;
    }
}
=======
<?php

namespace Doctrine\Common\Cache;

/**
 * Void cache driver. The cache could be of use in tests where you don`t need to cache anything.
 *
 * @link   www.doctrine-project.org
 */
class VoidCache extends CacheProvider
{
    /**
     * {@inheritDoc}
     */
    protected function doFetch($id)
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    protected function doContains($id)
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    protected function doSave($id, $data, $lifeTime = 0)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function doDelete($id)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function doFlush()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function doGetStats()
    {
        return;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
