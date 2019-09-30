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

/**
 * @codeCoverageIgnore
 */
final class Flip extends FilterAbstract
{
    const NAME = 'flip';

    /**
     * @var string
     */
    private $axis;

    /**
     * @param string $axis possible values are: "x", "horizontal", "y", or "vertical"
     */
    public function __construct(string $axis)
    {
        $this->axis = $axis;
    }

    public function getAxis(): string
    {
        return $this->axis;
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

/**
 * @codeCoverageIgnore
 */
final class Flip extends FilterAbstract
{
    const NAME = 'flip';

    /**
     * @var string
     */
    private $axis;

    /**
     * @param string $axis possible values are: "x", "horizontal", "y", or "vertical"
     */
    public function __construct(string $axis)
    {
        $this->axis = $axis;
    }

    public function getAxis(): string
    {
        return $this->axis;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
