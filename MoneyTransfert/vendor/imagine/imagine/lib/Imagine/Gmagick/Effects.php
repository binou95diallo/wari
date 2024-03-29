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

namespace Imagine\Gmagick;

use Imagine\Effects\EffectsInterface;
use Imagine\Exception\RuntimeException;
use Imagine\Image\Palette\Color\ColorInterface;
use Imagine\Exception\NotSupportedException;

/**
 * Effects implementation using the Gmagick PHP extension
 */
class Effects implements EffectsInterface
{
    private $gmagick;

    public function __construct(\Gmagick $gmagick)
    {
        $this->gmagick = $gmagick;
    }

    /**
     * {@inheritdoc}
     */
    public function gamma($correction)
    {
        try {
            $this->gmagick->gammaimage($correction);
        } catch (\GmagickException $e) {
            throw new RuntimeException('Failed to apply gamma correction to the image', $e->getCode(), $e);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function negative()
    {
        if (!method_exists($this->gmagick, 'negateimage')) {
            throw new NotSupportedException('Gmagick version 1.1.0 RC3 is required for negative effect');
        }

        try {
            $this->gmagick->negateimage(false, \Gmagick::CHANNEL_ALL);
        } catch (\GmagickException $e) {
            throw new RuntimeException('Failed to negate the image', $e->getCode(), $e);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function grayscale()
    {
        try {
            $this->gmagick->setImageType(2);
        } catch (\GmagickException $e) {
            throw new RuntimeException('Failed to grayscale the image', $e->getCode(), $e);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function colorize(ColorInterface $color)
    {
        throw new NotSupportedException('Gmagick does not support colorize');
    }

    /**
     * {@inheritdoc}
     */
    public function sharpen()
    {
        throw new NotSupportedException('Gmagick does not support sharpen yet');
    }

    /**
     * {@inheritdoc}
     */
    public function blur($sigma = 1)
    {
        try {
            $this->gmagick->blurImage(0, $sigma);
        } catch (\GmagickException $e) {
            throw new RuntimeException('Failed to blur the image', $e->getCode(), $e);
        }

        return $this;
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

namespace Imagine\Gmagick;

use Imagine\Effects\EffectsInterface;
use Imagine\Exception\RuntimeException;
use Imagine\Image\Palette\Color\ColorInterface;
use Imagine\Exception\NotSupportedException;

/**
 * Effects implementation using the Gmagick PHP extension
 */
class Effects implements EffectsInterface
{
    private $gmagick;

    public function __construct(\Gmagick $gmagick)
    {
        $this->gmagick = $gmagick;
    }

    /**
     * {@inheritdoc}
     */
    public function gamma($correction)
    {
        try {
            $this->gmagick->gammaimage($correction);
        } catch (\GmagickException $e) {
            throw new RuntimeException('Failed to apply gamma correction to the image', $e->getCode(), $e);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function negative()
    {
        if (!method_exists($this->gmagick, 'negateimage')) {
            throw new NotSupportedException('Gmagick version 1.1.0 RC3 is required for negative effect');
        }

        try {
            $this->gmagick->negateimage(false, \Gmagick::CHANNEL_ALL);
        } catch (\GmagickException $e) {
            throw new RuntimeException('Failed to negate the image', $e->getCode(), $e);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function grayscale()
    {
        try {
            $this->gmagick->setImageType(2);
        } catch (\GmagickException $e) {
            throw new RuntimeException('Failed to grayscale the image', $e->getCode(), $e);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function colorize(ColorInterface $color)
    {
        throw new NotSupportedException('Gmagick does not support colorize');
    }

    /**
     * {@inheritdoc}
     */
    public function sharpen()
    {
        throw new NotSupportedException('Gmagick does not support sharpen yet');
    }

    /**
     * {@inheritdoc}
     */
    public function blur($sigma = 1)
    {
        try {
            $this->gmagick->blurImage(0, $sigma);
        } catch (\GmagickException $e) {
            throw new RuntimeException('Failed to blur the image', $e->getCode(), $e);
        }

        return $this;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
