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

namespace Imagine\Image\Fill\Gradient;

use Imagine\Image\PointInterface;

/**
 * Vertical gradient fill
 */
final class Vertical extends Linear
{
    /**
     * {@inheritdoc}
     */
    public function getDistance(PointInterface $position)
    {
        return $position->getY();
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

namespace Imagine\Image\Fill\Gradient;

use Imagine\Image\PointInterface;

/**
 * Vertical gradient fill
 */
final class Vertical extends Linear
{
    /**
     * {@inheritdoc}
     */
    public function getDistance(PointInterface $position)
    {
        return $position->getY();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
