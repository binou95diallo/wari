<<<<<<< HEAD
<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Config\Filter\Type;

use Liip\ImagineBundle\Config\Filter\Argument\Size;

/**
 * @codeCoverageIgnore
 */
final class Scale extends FilterAbstract
{
    const NAME = 'scale';

    /**
     * @var Size
     */
    private $dimensions;

    /**
     * @var float
     */
    private $to;

    /**
     * @param Size       $dimensions
     * @param float|null $to         proportional scale operation computed by multiplying all image sides by this value
     */
    public function __construct(Size $dimensions, float $to = null)
    {
        $this->dimensions = $dimensions;
        $this->to = $to;
    }

    public function getDimensions(): Size
    {
        return $this->dimensions;
    }

    public function getTo(): ?float
    {
        return $this->to;
    }
}
=======
<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Config\Filter\Type;

use Liip\ImagineBundle\Config\Filter\Argument\Size;

/**
 * @codeCoverageIgnore
 */
final class Scale extends FilterAbstract
{
    const NAME = 'scale';

    /**
     * @var Size
     */
    private $dimensions;

    /**
     * @var float
     */
    private $to;

    /**
     * @param Size       $dimensions
     * @param float|null $to         proportional scale operation computed by multiplying all image sides by this value
     */
    public function __construct(Size $dimensions, float $to = null)
    {
        $this->dimensions = $dimensions;
        $this->to = $to;
    }

    public function getDimensions(): Size
    {
        return $this->dimensions;
    }

    public function getTo(): ?float
    {
        return $this->to;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
