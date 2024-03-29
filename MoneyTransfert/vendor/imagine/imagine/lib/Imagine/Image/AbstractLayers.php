<<<<<<< HEAD
<?php

/*
 * This file is part of the Imagine package.
 *
 * (c) Bulat Shakirzyanov <mallluhuct@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Imagine\Image;

abstract class AbstractLayers implements LayersInterface
{
    /**
     * {@inheritdoc}
     */
    public function add(ImageInterface $image)
    {
        $this[] = $image;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function set($offset, ImageInterface $image)
    {
        $this[$offset] = $image;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function remove($offset)
    {
        unset($this[$offset]);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function get($offset)
    {
        return $this[$offset];
    }

    /**
     * {@inheritdoc}
     */
    public function has($offset)
    {
        return isset($this[$offset]);
    }
}
=======
<?php

/*
 * This file is part of the Imagine package.
 *
 * (c) Bulat Shakirzyanov <mallluhuct@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Imagine\Image;

abstract class AbstractLayers implements LayersInterface
{
    /**
     * {@inheritdoc}
     */
    public function add(ImageInterface $image)
    {
        $this[] = $image;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function set($offset, ImageInterface $image)
    {
        $this[$offset] = $image;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function remove($offset)
    {
        unset($this[$offset]);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function get($offset)
    {
        return $this[$offset];
    }

    /**
     * {@inheritdoc}
     */
    public function has($offset)
    {
        return isset($this[$offset]);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
