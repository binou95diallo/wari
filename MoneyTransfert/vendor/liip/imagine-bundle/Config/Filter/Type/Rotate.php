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
final class Rotate extends FilterAbstract
{
    const NAME = 'rotate';

    /**
     * @var int
     */
    private $angle;

    public function __construct(int $angle)
    {
        $this->angle = $angle;
    }

    public function getAngle(): int
    {
        return $this->angle;
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
final class Rotate extends FilterAbstract
{
    const NAME = 'rotate';

    /**
     * @var int
     */
    private $angle;

    public function __construct(int $angle)
    {
        $this->angle = $angle;
    }

    public function getAngle(): int
    {
        return $this->angle;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
